<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = array(
            // array(
            //     'title' => 'user_type'
            // ),
            array(
                'title' => 'board_directors'
            ),
            array(
                'title' => 'position'
            ),
            array(
                'title' => 'tournament_type'
            ),
            array(
                'title' => 'venue'
            ),
            array(
                'title' => 'staff'
            ),
            array(
                'title' => 'achievement_type'
            ),     
        );
        DB::table('category')->insert($category);
    }
}
