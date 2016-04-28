<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HeroAppTest extends TestCase{

	use DatabaseTransactions;

	function testHeroCreation(){

		$this->visit('/app')
				/*->click('createLink')
				->seePageIs('/app/create')
				->type('HeroTest', 'name')
				->press('create')
				->seePageIs('/app')
				->see('HeroTest')*/;
	}

	function testStatsGenerateCorrectly(){
		
	}

}
