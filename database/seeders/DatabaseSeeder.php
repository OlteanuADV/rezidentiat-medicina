<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $data = [];
        $users = DB::connection('mysql2')->table('users')->get();
        foreach ($users as $user) {
            $name = explode('@', $user->username)[0];
            $name = str_replace(['.', '_', '-'], ' ', $name);
            $name = ucwords($name);

            $data[] = [
                'name' => $name,	
                'email' => $user->username,
                'password' => $user->password,
                'created_at' => $user->created_at,
                'premium_start' => $user->data_creare_cont_premium,
                'premium_end' => $user->data_expirare_cont_premium,
            ];
        }

        $chunks = array_chunk($data, 500);
        foreach ($chunks as $chunk) {
            DB::connection('mysql')->table('users')->insert($chunk);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
