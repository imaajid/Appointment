<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin Testing',
                'email' => 'admin@app.com',
                'role' => 'admin',
            ],
            [
                'name' => 'User Testing',
                'email' => 'user@app.com',
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            $u = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt('Pa$$w0rd!'),
            ]);
            if (isset($user['role'])) {
                $role = Role::findByName($user['role']);
                $u->assignRole($role);
            }
        }
    }
}
