<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            [
            'name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'phone' => '0777777777',
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('123321'),
            ],
            [
                'name' => 'Manar Jaradat',
                'email' => 'manar@yahoo.com',
                'phone' => '0778542530',
                'username' => 'manara',
                'role' => 'doctor',
                'password' => Hash::make('123321'),
            ],
            [
                'name' => 'Zaid Samamah',
                'email' => 'zsamamah@yahoo.com',
                'phone' => '0778564336',
                'username' => '1933504',
                'role' => 'student',
                'password' => Hash::make('123321'),
            ],
            [
                'name' => 'Bernard Galleues',
                'email' => 'bernard@yahoo.com',
                'phone' => '0785643254',
                'username' => 'bernardo',
                'role' => 'doctor',
                'password' => Hash::make('123321'),
            ],
            [
                'name' => 'Tommy Bondan',
                'email' => 'tommy@yahoo.com',
                'phone' => '07775643251',
                'username' => 'tommy',
                'role' => 'doctor',
                'password' => Hash::make('123321'),
            ],
        ]
    );
    DB::table('students')->insert([
        'student_id'=>'3',
        'dept'=>'computer eng',
        'hours'=>'93',
        'gpa'=>'3.5',
        'grad_year'=>'2023'
    ]);
    }
}
