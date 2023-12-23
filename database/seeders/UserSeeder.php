<?php

    namespace Database\Seeders;

    use App\Models\User;
    use Illuminate\Database\Seeder;

    class UserSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            $users = [
                [
                    "name" => env("USER_NAME"),
                    "email" => env("USER_EMAIL"),
                    "password" => env("USER_PASSWORD")
                ]
            ];

            foreach ($users as $user) {
                User::create($user);
            }

        }
    }
