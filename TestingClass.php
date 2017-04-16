<?php

/**
 * Created by PhpStorm.
 * User: janeh
 * Date: 4/15/2017
 * Time: 4:19 PM
 */

use PHPUnit\Framework\TestCase;

class TestingClass extends TestCase
{

  public function testOne(){
    $stack = [];

    $this->assertEquals(0, count($stack));
  }

  public function testTwo(){
    $stack = ["Foo"];

    $this->assertEquals(1, count($stack));
  }

  /*
  public function testThree(){
    $stack = ["Foo"];

    $this->assertEquals(0, count($stack));
  }*/

  public function testFour(){
    $stack = ["Foo", "Bar"];

    $this->assertEquals(2, count($stack));
  }

}