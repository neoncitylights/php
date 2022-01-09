<?php

namespace Neoncitylights\ExampleLibrary;

class Dog implements IAnimal {
	private string $name;

	public function __construct( string $name ) {
		$this->name = $name;
	}

	public function getName(): string {
		return $this->name;
	}

	public function getType(): string {
		return 'Dog';
	}

	public function getSound(): string {
		return 'Woof!';
	}
}
