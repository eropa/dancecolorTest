<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.local',
            'password' => bcrypt('123123123'),
        ]);


        for($i=1;$i<=5;$i++){
            DB::table('newpages')->insert([
                'title' => 'new'.$i,
                'published_at' => new DateTime(),
                'content' => 'news'.$i.'....',
            ]);
            sleep(1);
        }




    }
}
