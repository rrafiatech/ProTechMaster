<?php
/**
* 
*/
class AdminTableSeeder extends Seeder
{
	
	public function run()
	{
		$rachid = Admin::create(array(
				'firstName'=>'Rachid',
				'lastName'=>'Rafia',
				'username'=>'rrafia',
				'password'=>Hash::make('rrafia'),
				'permission'=>'super admin',
				'position'=>'president',
			));
		$this->command->info('Rachid has been added to the Admin table');
		$faker = Faker\Factory::create();

		for($i = 0; $i < 10; $i++)
		{
			$admin = Admin::create(array(
				'firstName'=>$faker->firstName,
				'lastName'=>$faker->lastName,
				'username'=>$faker->username,
				'password'=>Hash::make($faker->word),
				'permission'=>$faker->word,
				'position'=>$faker->word,
				));
		}
		$this->command->info('Admins table seeded using Faker');
	}
}