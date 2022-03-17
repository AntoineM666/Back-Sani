<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user ->setEmail('true@test.com')
              ->setPrenom('Antoine')
              ->setNom('Marie') 
              ->setPassword('azerty123')
              ->setTel('0606060606')
              ->setAdresse('57 route national')
              ->setVille('Isques')
              ->setCp(62360);

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'Antoine');
        $this->assertTrue($user->getNom() === 'Marie');
        $this->assertTrue($user->getPassword() === 'azerty123');
        $this->assertTrue($user->getTel() === '0606060606');
        $this->assertTrue($user->getAdresse() === '57 route national');
        $this->assertTrue($user->getVille() === 'Isques');
        $this->assertTrue($user->getCp() === 62360);


    }

    public function testIsFalse()
    {
        $user = new User();

        $user ->setEmail('true@test.com')
              ->setPrenom('Antoine')
              ->setNom('Marie') 
              ->setPassword('azerty123')
              ->setTel('0606060606')
              ->setAdresse('57 route national')
              ->setVille('Isques')
              ->setCp(62360);

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getTel() === 'false');
        $this->assertFalse($user->getAdresse() === 'false');
        $this->assertFalse($user->getVille() === 'false');
        $this->assertFalse($user->getCp() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getTel());
        $this->assertEmpty($user->getAdresse());
        $this->assertEmpty($user->getVille());
        $this->assertEmpty($user->getCp());
    }


}