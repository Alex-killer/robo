<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\DismissionReason;
use App\Models\Position;
use App\Models\User;
use App\Models\UserDismission;
use App\Models\UserPosition;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(60)->create();

        $director = Position::where('name', 'director')->first();
        $user = User::where('id', 1)->first();
        $user->position_id = $director->id;
        $user->save();

        User::factory(20)->trial()->create();

        $reasons = DismissionReason::all();
        User::factory(20)->create()->each(function($user) use ($reasons) {
            $user->dismissionReason()->attach($reasons->random());
        });

        $departments = Department::with('positions')->get();
        User::all()->each(function ($user) use ($departments) {
            if ($user->id != 1) {
                $dept = $departments->random();
                $position = $dept->positions->random();
                $user->department_id = $dept->id;
                $user->position_id = $position->id;
                $user->save();
            }
        });

        Department::with('users')->get()->each(function ($department) {
            $department->leader_id = $department->users->random()->id;
            $department->save();
        });

//        foreach (Department::with('users')->get() as $department) {
//            $department->leader_id = $department->users->random()->id;
//            $department->save();
//        }
//
//        $depts = Department::all();
//        foreach ($depts as $dept) {
//            $users = $dept->users;
//            $dept->leader_id = $users->random()->id;
//            $dept->save();
//        }

    }
}
