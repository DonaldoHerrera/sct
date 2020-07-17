<?php

use Illuminate\Database\Seeder;
use App\User;
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
        User::create([
            'name'=>'Software',
            'apellido'=>'Engineer',
            'sexo'=>'Hombre',
            'email'=>'programer@enginer.es',
            'password'=>'sst_20',
            'confirmed'=>1,
            'confirmation_code'=>null,
            'rol'=>'admin'
        ]);
    }
}
