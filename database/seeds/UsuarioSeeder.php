<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User:: class, 19)->create();

        App\Models\User::create([
            'name' => 'alysmar zuñiga',
            'email' => 'alysmarzuniga@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
