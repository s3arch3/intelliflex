<?php

namespace Database\Seeders;

use App\Models\GroupProfessor;
use Illuminate\Database\Seeder;

class GroupProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupProfessors=[
            [
                'user_id' => 1,
                'code' => 'KGGGDKP',
                'name' => 'BSIS 4-A',
                'description' => 'This is the group for BSIS 4-A',
                'is_active' => '1'
            ],
            [
                'user_id' => 1,
                'code' => 'A3ZAKM1',
                'name' => 'BSIS 4-B',
                'description' => 'This is the group for BSIS 4-B',
                'is_active' => '1'
            ],
        ];
        GroupProfessor::insert($groupProfessors);
    }
}
