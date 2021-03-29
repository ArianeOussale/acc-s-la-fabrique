<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
         User::create([
            'nom'=>'admin',
            'prenom'=>'gerant',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('password'),
            'role'=> 1,
            'statut'=> true,
            ]);
             
    }
}
