<?php

namespace App\Tests;

use App\Entity\Restaurant;
use PHPUnit\Framework\TestCase;

class RestaurantTest extends TestCase
{
   public function testRestaurant(){
         $restaurant = new Restaurant();
         $restaurant->setNom('Restaurant1')
                    ->setAdresse('1 rue de la paix')
                    ->setVille('Paris')
                    ->setCp(75000)
                    ->setNumeroTel('0123456789');



            $this->assertTrue($restaurant->getNom() === 'Restaurant1');
            $this->assertTrue($restaurant->getAdresse() === '1 rue de la paix');
            $this->assertTrue($restaurant->getVille() === 'Paris');
            $this->assertTrue($restaurant->getCp() === 75000);
            $this->assertTrue($restaurant->getNumeroTel() === '0123456789');
   }
   public function testIsFalse()
   {
         $restaurant = new Restaurant();
         $restaurant->setNom('Restaurant1')
                    ->setAdresse('1 rue de la paix')
                    ->setVille('Paris')
                    ->setCp(75000)
                    ->setNumeroTel('0123456789');

                    $this->assertFalse($restaurant->getNom() === 'false');
                    $this->assertFalse($restaurant->getAdresse() === 'false');
                    $this->assertFalse($restaurant->getVille() === 'false');
                    $this->assertFalse($restaurant->getCp() === 'false');
                    $this->assertFalse($restaurant->getNumeroTel() === 'false');
    }

    public function testIsEmpty()
    {
         $restaurant = new Restaurant();
         $restaurant->setNom('Restaurant1')
                    ->setAdresse('1 rue de la paix')
                    ->setVille('Paris')
                    ->setCp(75000)
                    ->setNumeroTel('0123456789');

                    $this->assertEmpty($restaurant->getNom() === '');
                    $this->assertEmpty($restaurant->getAdresse() === '');
                    $this->assertEmpty($restaurant->getVille() === '');
                    $this->assertEmpty($restaurant->getCp() === '');
                    $this->assertEmpty($restaurant->getNumeroTel() === '');
    }
}