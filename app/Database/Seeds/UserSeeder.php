<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin',
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'role' => 'user',
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
