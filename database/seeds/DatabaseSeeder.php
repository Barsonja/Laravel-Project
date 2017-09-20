<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//factory(App\User::class,100)->create();
    	//factory(App\Inquiry::class,250)->create();
	    factory(App\Contractor::class, 20)->create();

        // $this->call(UsersTableSeeder::class);

    }
}
