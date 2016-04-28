<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Touit;

class TouitTest extends TestCase{

	use DatabaseTransactions;

	function testSuccessfullRegister(){
		$faker = Faker\Factory::create();
		$username = $faker->name;
        $email = $faker->safeEmail;
        $password = bcrypt(str_random(10));
        $this->visit('/creations/touitteur')
        	->see('Login')
			->click('Login')
			->seePageIs('/login')
			->see('Register')
			->click('Register')
			->seePageIs('/register')
			->type($username, 'name')
			->type($email, 'email')
			->type($password, 'password')
			->type($password, 'password_confirmation')
			->press('Register')
			->seePageIs('/creations/touitteur')
			->see('Bonjour '.$username);
	}

	function testSuccessfullLogin(){
		
		$user = factory(User::class)->create();
		
		$this->visit('/creations/touitteur')
			->see('Login')
			->click('Login')
			->seePageIs('/login')
			->type($user->email, 'email')
			->type('azerty', 'password')
			->press('submit')
			->seePageIs('/creations/touitteur')
			->see('Bonjour ' . $user->name);
	}


	function testTouitDisplayedAfterSavedInDatabase(){

		$user = factory(User::class)->create();
        $this->actingAs($user)
        	->visit('/creations/touitteur')
			->type('Test transactions', 'texte')
			->press('submit')
			->seePageIs('/creations/touitteur')
			->see('Test transactions');
	}


	function testDeleteTouit(){

		$user = factory(User::class)->create();
		$touit = factory(Touit::class)->create([
			'user_id' => $user->id
		]);
		$this->actingAs($user)
        	->visit('/creations/touitteur')
        	->see($touit->texte)
        	->click('del-id-'.$touit->id)
        	->seePageIs('/creations/touitteur')
        	->see('Votre touit a bien été supprimé!');
	}

	function testAddPlusAndMoins(){

		$user = factory(User::class)->create();
		$touit = factory(Touit::class)->create([
			'user_id' => $user->id
		]);
		$this->actingAs($user)
        	->visit('/creations/touitteur')
        	->see($touit->texte)
        	->click('plus-id-'.$touit->id)
        	->seePageIs('/creations/touitteur')
        	->see('+ 1')
        	->click('moins-id-'.$touit->id)
        	->seePageIs('/creations/touitteur')
        	->see('- 1');
	}

	function testUserTryToDeleteTouitFromAnotherUser(){
		$user = factory(User::class)->create();
		$hacker = factory(User::class)->create();
		$touit = factory(Touit::class)->create([
			'user_id' => $user->id
		]);
		$this->actingAs($hacker)
			->visit('/creations/touitteur')
			->see($touit->texte)
			->visit('/creations/touitteur/del/'.$touit->id)
			->seePageIs('/creations/touitteur')
			->see('Action impossible!');
	}

}
