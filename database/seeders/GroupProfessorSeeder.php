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
            // SIR MICHAEL
            [
                'user_id' => 1,
                'code' => 'KGGGDKP',
                'name' => 'B.S. Information System 4-A',
                'description' => 'This is the group for BSIS 4-A',
                'is_active' => '1'
            ],
            [
                'user_id' => 1,
                'code' => 'A3ZAKM1',
                'name' => 'B.S. Information System 4-B',
                'description' => 'This is the group for BSIS 4-B',
                'is_active' => '1'
            ],

            // SIR VINCE
            [
                'user_id' => 2,
                'code' => 'C4P5T0N',
                'name' => 'B.S. Information Technology 3-A',
                'description' => 'This is the group for BSIT 3-A',
                'is_active' => '1'
            ],
            [
                'user_id' => 2,
                'code' => '1MN13EK',
                'name' => 'B.S. Information Technology 3-B',
                'description' => 'This is the group for BSIT 3-B',
                'is_active' => '1'
            ],
        ];
        GroupProfessor::insert($groupProfessors);
    }
}
