<?php

namespace App\Tests;

use App\Entity\Plat;
use App\Entity\Restaurant;
use PHPUnit\Framework\TestCase;

class PlatTest extends TestCase
{
    public function testPlat(): void
    {
        $plat = new Plat();
        $plat->setNom('Plat1');
        // $plat->setCategorieRelation('/api/restaurants/1');
        


        $this->assertTrue($plat->getNom() === 'Plat1');
    }


    public function testIsFalse()
   {
         $plat = new plat();
            $plat->setNom('plat1');
                    $this->assertFalse($plat->getNom() === 'false');
    }



    public function testIsEmpty()
    {
            $plat = new Plat();
                        $this->assertEmpty($plat->getNom() === '');
        }












}
// voir l'insertion de la relation restaurannt dans le plat