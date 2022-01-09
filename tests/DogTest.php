<?php

namespace Neoncitylights\ExampleLibrary\Tests;

use Neoncitylights\ExampleLibrary\IAnimal;
use Neoncitylights\ExampleLibrary\Dog;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Neoncitylights\ExampleLibrary\Dog
 * @uses Neoncitylights\ExampleLibrary\Animal
 */
class DogTest extends TestCase {
	/**
	 * @covers ::getName
	 */
	public function testGetName(): void {
		$this->assertEquals( 'Ralph', (new Dog('Ralph') )->getName() );
	}

	/**
	 * @covers ::getSound
	 */
	public function testGetSound(): void {
		$this->assertEquals( 'Woof!', (new Dog('Charlie'))->getSound() );
	}

	/**
	 * @covers ::getType
	 */
	public function testGetType(): void {
		$this->assertEquals( 'Dog', ( new Dog( 'Buddy' ))->getType() );
	}
}
