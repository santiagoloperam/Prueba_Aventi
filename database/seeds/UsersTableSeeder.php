<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Santiago',
            'last_name' => 'Lopera',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'santiago@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Julian',
            'last_name' => 'Lopera',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'julian@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Jhon',
            'last_name' => 'Mendez',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'jhon@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Juan',
            'last_name' => 'Diaz',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'juan@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Luis',
            'last_name' => 'Calero',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'luis@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Pepe',
            'last_name' => 'Sierra',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'pepe@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Juan2',
            'last_name' => 'Mejia',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'juan2@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Ana',
            'last_name' => 'Parra',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'ana@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Manuel',
            'last_name' => 'Perez',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'manuel@email.com',
            'password' => '123456789'
        ]);

        User::create([
            'name' => 'Felipe',
            'last_name' => 'Lopera',
            'address' => 'cll22',
            'phone' => '30056987456',
            'email' => 'felipe@email.com',
            'password' => '123456789'
        ]);
    }
}
