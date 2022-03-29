<?php

namespace App\OpenApi;


use ApiPlatform\Core\OpenApi\Factory\OpenApiFactoryInterface;
use ApiPlatform\Core\OpenApi\OpenApi;


class OpenApiFactory implements OpenApiFactoryInterface
{
     public function __construct(private OpenApiFactoryInterface $decorated){
    }
    
    public function __invoke(array $context = []): OpenApi
    {
        $openApi = $this->decorated->__invoke($context);
        /** @var PathItem $path */
        foreach ($openApi->getPaths()->getPaths() as $key => $path) {
            if($path ->getGet()&& $path->getGet()->getsummary() ==='hidden'){

                $openApi->getPaths()->addPath($key, $path->withGet(null));

            }
        }

        $schemas = $openApi->getComponents()->getSecuritySchemes();
        $schemas['cookieAuth'] = new \ArrayObject([
            'type' => 'apiKey',
            'name' => 'PHPSESSID',
            'in' => 'cookie',
        ]);


        return $openApi ; 
    }
    
}