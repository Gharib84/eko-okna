<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Magazyn;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Magazyn::create([
            'magazyn_nazwa' => 'administrator'
        ]);



        User::create([
            'magazyn_id' => 1,
            'name' => 'admin',
            'email' => 'admin@ekookna.pl',
            'role'=> 'admin',
            'password' => Hash::make('admin1234'),
        ]);

    }
}
