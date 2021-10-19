<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'nino',
            'number'    => '081277488755'
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('contacts')->insert($data);
    }
}
