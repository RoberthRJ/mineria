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
        factory(App\Role::class, 1)->create(['name' => 'company']);
        factory(App\Role::class, 1)->create(['name' => 'proffesional']);

        factory(App\User::class, 1)->create([
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('secret'),
        	'role_id' => App\Role::ADMIN,
        ])
        ->each(function(App\User $u){
        	factory(App\Proffesional::class, 1)->create(['user_id' => $u->id]); 
        });

        factory(App\User::class, 20)->create()
        ->each(function(App\User $u){
        	factory(App\Proffesional::class, 1)->create(['user_id' => $u->id]); 
        });

        factory(App\User::class, 10)->create()
        ->each(function(App\User $u){
        	factory(App\Company::class, 1)->create(['user_id' => $u->id]);  
        });

        factory(App\User::class, 10)->create()
        ->each(function(App\User $u){
        	factory(App\Company::class, 1)->create(['user_id' => $u->id])
        	->each(function(App\Company $v){
        		factory(App\Consumer::class, 1)->create(['company_id' => $v->id]);    
	        });
	    });

        factory(App\Category::class, 10)->create();

        factory(App\Area::class, 10)->create();

        factory(App\Location::class, 30)->create();

        Storage::deleteDirectory('services');
        Storage::makeDirectory('services');

        factory(App\Service::class, 50)->create();

        factory(App\Offert::class, 50)->create();

    }
}
