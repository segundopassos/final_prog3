<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Usuario extends DataLayer
{
	public function __construct()
	{
		parent::__construct("usuarios", [], "id", false);
	}
}