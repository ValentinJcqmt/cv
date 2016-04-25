<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TouitTest extends TestCase{

	use DatabaseTransactions;

	function testTouitDisplayedAfterSavedInDatabase(){

		$this->visit('/creations/touitteur')
			->type('Test transactions', 'texte')
			->press('submit')
			->see('Salut')
			->seePageIs('/creations/touitteur');
	}


	function testSuccessfullLogin(){

		$this->visit('/login')
			->type('valentinjacquement@gmail.com', 'email')
			->type('azerty', 'password')
			->press('submit')
			->seePageIs('/creations/touitteur')
			->see('Bonjour Valentin');
	}

}
