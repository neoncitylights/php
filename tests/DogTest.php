<?php

namespace Neoncitylights\ExampleLibrary\Tests;

use Neoncitylights\ExampleLibrary\Dog;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass( Dog::class )]
class DogTest extends TestCase {
	public function testGetName(): void {
		$this->assertEquals( 'Ralph', ( new Dog( 'Ralph', 4.0 ) )->getName() );
	}

	public function testGetSound(): void {
		$this->assertEquals( 'Woof!', ( new Dog( 'Charlie', 5.0 ) )->getSound() );
	}

	public function testGetType(): void {
		$this->assertEquals( 'Dog', ( new Dog( 'Buddy', 3.2 ) )->getType() );
	}

	public function testGetAge(): void {
		$this->assertEqualsWithDelta( 8.7, ( new Dog( 'Waffles', 8.7 ) )->getAge(), 0.0001 );
	}
}
