<?php

require ('./vendor/autoload.php');
require ('./CasiBuscaMinas.php');

use PHPUnit\Framework\TestCase;

final class TestCasiBuscaMinas extends TestCase
{
    public function testClassExist() 
    {
        $this->assertTrue(class_exists('BuscaMinas'));
    }

    public function testCreateClass()
    {
        $play = new BuscaMinas(2,2);
        $this->assertEquals('BuscaMinas', get_class($play));
    }

    public function testAgregarMina()
    {
        $play = new BuscaMinas(2,2);
        $this->assertFalse($play->agregarMina(1,3));
        $this->assertTrue($play->agregarMina(1,1));
    } 

    public function testJugar()
    {
        $play = new BuscaMinas(2,2);
        $this->assertFalse($play->jugar(1,1));
        $play->agregarMina(1,1);
        $this->assertTrue($play->jugar(1,1));

    }

    public function testTerminoDeJugar()
    {
        $play = new BuscaMinas(2, 2);
        $this->assertFalse($play->terminoDeJugar());
        $play->agregarMina(1,1);
        $play->jugar(1,1);
        $this->assertTrue($play->terminoDeJugar());
    }

    public function testGano()
    {
        $play = new BuscaMinas(2,2);
        $this->assertTrue($play->gano());

    }
    
    public function testPerdio()
    {
        $play = new BuscaMinas(2,2);
        $play->assertFalse($play->gano($perdio, $termino));

    }

    public function testSacarMina()
    {
        $play = new BuscaMinas;
        $play->assertFalse($play->sacarMina(1,1));
        $play->assertTrue($play->sacarMina(0,2));
    }
}