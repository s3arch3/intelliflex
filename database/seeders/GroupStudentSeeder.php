<?php

namespace Database\Seeders;

use App\Models\GroupStudent;
use Illuminate\Database\Seeder;

class GroupStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupStudents=[
            //BSIS 4-A
            [ 'user_id' => 3, 'group_professor_id' => 1],
            [ 'user_id' => 4, 'group_professor_id' => 1],
            [ 'user_id' => 5, 'group_professor_id' => 1],
            [ 'user_id' => 6, 'group_professor_id' => 1],
            [ 'user_id' => 7, 'group_professor_id' => 1],

            //BSIS 4-B
            [ 'user_id' => 8, 'group_professor_id' => 2],
            [ 'user_id' => 9, 'group_professor_id' => 2],
            [ 'user_id' => 10, 'group_professor_id' => 2],
            [ 'user_id' => 11, 'group_professor_id' => 2],
            [ 'user_id' => 12, 'group_professor_id' => 2],
        ];
        GroupStudent::insert($groupStudents);
    }
}
