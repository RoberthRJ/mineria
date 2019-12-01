<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Role;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id')->default(Role::PROFFESIONAL);
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('picture')->nullable();

            //Cashier columns
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_hour')->nullable();
            $table->timestamp('trial_ends_at')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::create('subscriptions', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->string('name');
        //     $table->string('stripe_id');
        //     $table->string('stripe_plan');
        //     $table->integer('quantity');
        //     $table->timestamp('trial_ends_at')->nullable();
        //     $table->timestamp('ends_at')->nullable();
        //     $table->timestamps();
        // });


        Schema::create('user_social_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('provider');
            $table->string('provider_uid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('user_social_accounts');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
}
