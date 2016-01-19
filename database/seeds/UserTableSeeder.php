<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\User;
use CodeDelivery\Models\Cliente;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function($user){
        	$user->cliente()->save( factory(Cliente::class)->make() );
        });
    }
}
