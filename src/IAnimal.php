<?php

namespace Neoncitylights\ExampleLibrary;

interface IAnimal {
	/** name of the animal, like 'Fluffy' */
	public function getName(): string;

	/** type of the animal, like cat, alligator, tiger */
	public function getType(): string;

	/** the sound that the animal makes */
	public function getSound(): string;

	/** age of dog in years */
	public function getAge(): float;
}
