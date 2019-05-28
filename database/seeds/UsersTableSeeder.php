<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datenow = Carbon::now();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.nl';
        $user->password = Hash::make('admin123');
        $user->save();
    }
}
