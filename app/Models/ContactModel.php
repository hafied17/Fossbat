<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'number'];

    protected $validationRules = [
        'name' => 'required',
        'number' => 'required|numeric|max_length[15]|is_unique[contacts.number]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'nama wajib di isi!'
        ],
        'number' => [
            'required' => 'nomer wajib di isi!',
            'max_length' => 'hanya 15 karakter!',
            'is_unique' => 'nomer sudah digunakan!'
        ]
    ];
}
