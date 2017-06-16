<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role madmin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name ="admin";
        $adminRole->save();


      //membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "member";
        $memberRole->save();

        //memebuat sample admin
        $admin = new User();
        $admin->name = 'admin Larapus';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachrole($adminRole);

        //memebuat sample member
        $member = new User();
        $member->name = 'sample member';
        $member->email = 'member@gmail.com';
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachrole($memberRole);
    }
}
