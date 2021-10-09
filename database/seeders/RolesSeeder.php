<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Varbox\Contracts\RoleModelContract;

class RolesSeeder extends Seeder
{
    /**
     * Mapping structure of admin roles.
     *
     * @var array
     */
    protected $roles = [
        'Admin' => [
            'name' => 'Admin',
            'guard' => 'admin',
        ],
        'Super' => [
            'name' => 'Super',
            'guard' => 'admin',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @param RoleModelContract $role
     * @return void
     */
    public function run(RoleModelContract $role)
    {
        foreach ($this->roles as $label => $data) {
            if ($role->where('name', $data['name'])->count() == 0) {
                $role->doNotLogActivity()->create($data);
            }
        }
    }
}
