<?php

use Illuminate\Database\Seeder;

class ValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = array(
            // array(
            //     'category_id' => 1,
            //     'value' => 'Admin'
            // ),
            // array(
            //     'category_id' => 1,
            //     'value' => 'Editor'
            // ),
            array(
                'category_id' => 1,
                'value' => 'President'
            ),
            array(
                'category_id' => 1,
                'value' => 'Immediate Past President'
            ),
            array(
                'category_id' => 1,
                'value' => 'Vice-President'
            ),
            array(
                'category_id' => 1,
                'value' => 'General Secretary'
            ),
            array(
                'category_id' => 1,
                'value' => 'Secretary'
            ),
            array(
                'category_id' => 1,
                'value' => 'Treasurer'
            ),
            array(
                'category_id' => 1,
                'value' => 'Deputy Treasurer'
            ),
            array(
                'category_id' => 1,
                'value' => 'Executive Member'
            ),
            array(
                'category_id' => 2,
                'value' => 'Goalkeeper'
            ),
            array(
                'category_id' => 2,
                'value' => 'Defender'
            ),
            array(
                'category_id' => 2,
                'value' => 'Midfielder'
            ),
            array(
                'category_id' => 2,
                'value' => 'Forward'
            ),
            array(
                'category_id' => 3,
                'value' => 'League'
            ),
            array(
                'category_id' => 3,
                'value' => 'Knockout'
            ),
            array(
                'category_id' => 4,
                'value' => 'Dasarath Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'ANFA Complex'
            ),
            array(
                'category_id' => 4,
                'value' => 'APF Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Chyasal Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Sahid Maidan Stadium'
            ),
             array(
                'category_id' => 4,
                'value' => 'Domalal Rajbanshi Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Ilam Tundikhel'
            ),
            array(
                'category_id' => 4,
                'value' => 'Pokhara Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'ANFA Technical Centre, Butwal'
            ),
            array(
                'category_id' => 4,
                'value' => 'Dharan Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Dhangadhi stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Battar Campus Ground'
            ),
            array(
                'category_id' => 4,
                'value' => 'Tharuhat stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Damak Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Forestry Ground Hetauda'
            ),
            array(
                'category_id' => 4,
                'value' => 'Simara Stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Tharuhat stadium'
            ),
            array(
                'category_id' => 4,
                'value' => 'Other'
            ),
            array(
                'category_id' => 5,
                'value' => 'Manager'
            ),
            array(
                'category_id' => 5,
                'value' => 'Assistant-Manager'
            ),
            array(
                'category_id' => 5,
                'value' => 'Head-Coach'
            ),
            array(
                'category_id' => 5,
                'value' => 'Assistant-Coach'
            ),
            array(
                'category_id' => 5,
                'value' => 'GoalKeeper-Coach'
            ),
            array(
                'category_id' => 5,
                'value' => 'Officials'
            ),
            array(
                'category_id' => 5,
                'value' => 'Media-Officer'
            ),
            array(
                'category_id' => 5,
                'value' => 'Physiotherapist'
            ),
            array(
                'category_id' => 6,
                'value' => 'FA Tournaments'
            ),
            array(
                'category_id' => 6,
                'value' => 'International Tournaments'
            ),
            array(
                'category_id' => 6,
                'value' => 'Other Tournaments'
            ),
        );
        DB::table('value')->insert($values);
    }
}
