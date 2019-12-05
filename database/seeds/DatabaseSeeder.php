<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Storage::deleteDirectory('users');
        Storage::makeDirectory('users');

        factory(App\Role::class, 1)->create(['name' => 'admin']);
        factory(App\Role::class, 1)->create(['name' => 'candidate']);
        factory(App\Role::class, 1)->create(['name' => 'company']);

        factory(App\User::class, 1)->create([
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('secret'),
        	'role_id' => App\Role::ADMIN,
        ])
        ->each(function(App\User $u){
        	factory(App\Candidate::class, 1)->create(['user_id' => $u->id]); 
        });

        factory(App\User::class, 20)->create()
        ->each(function(App\User $u){
        	factory(App\Candidate::class, 1)->create(['user_id' => $u->id]); 
        });

        factory(App\User::class, 10)->create([
            'role_id' => App\Role::COMPANY,
        ])
        ->each(function(App\User $u){
        	factory(App\Company::class, 1)->create(['user_id' => $u->id]);  
        });

        factory(App\Category::class, 10)->create();

        factory(App\Sector::class, 10)->create();

        factory(App\Location::class, 30)->create();

        factory(App\Service::class, 50)->create();

        factory(App\Offert::class, 50)->create();

    }
}
