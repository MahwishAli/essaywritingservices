<?php

use App\Fare;
use Illuminate\Database\Seeder;

class FareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::insert([
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 1, // 20
               'per_page_price'     => 4
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 2, // 15
               'per_page_price'     => 6
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 3, // 10
               'per_page_price'     => 8
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 4, // 7
               'per_page_price'     => 10
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 5, // 6
               'per_page_price'     => 12
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 6, // 5 days
               'per_page_price'     => 14
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 7, // 4 days
               'per_page_price'     => 16
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 8, // 3 days
               'per_page_price'     => 18
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 9, // 48 hours
               'per_page_price'     => 20
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 10, // 24 hours
               'per_page_price'     => 22
            ],
            [
               'academic_level_id'  => 1, // A-Level / College
               'deadline_id'        => 11, // 12 hours
               'per_page_price'     => 24
            ],

            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 1, // 20
               'per_page_price'     => 5
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 2, // 15
               'per_page_price'     => 7
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 3, // 10
               'per_page_price'     => 9
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 4, // 7
               'per_page_price'     => 11
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 5, // 6
               'per_page_price'     => 13
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 6, // 5 days
               'per_page_price'     => 15
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 7, // 4 days
               'per_page_price'     => 17
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 8, // 3 days
               'per_page_price'     => 19
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 9, // 48 hours
               'per_page_price'     => 21
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 10, // 24 hours
               'per_page_price'     => 23
            ],
            [
               'academic_level_id'  => 2, // Undergraduate / Diploma
               'deadline_id'        => 11, // 12 hours
               'per_page_price'     => 25
            ],


            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 1, // 20
               'per_page_price'     => 6
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 2, // 15
               'per_page_price'     => 8
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 3, // 10
               'per_page_price'     => 10
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 4, // 7
               'per_page_price'     => 12
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 5, // 6
               'per_page_price'     => 14
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 6, // 5 days
               'per_page_price'     => 16
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 7, // 4 days
               'per_page_price'     => 18
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 8, // 3 days
               'per_page_price'     => 20
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 9, // 48 hours
               'per_page_price'     => 22
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 10, // 24 hours
               'per_page_price'     => 24
            ],
            [
               'academic_level_id'  => 3, // Master
               'deadline_id'        => 11, // 12 hours
               'per_page_price'     => 26
            ],

            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 1, // 20
               'per_page_price'     => 7
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 2, // 15
               'per_page_price'     => 9
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 3, // 10
               'per_page_price'     => 11
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 4, // 7
               'per_page_price'     => 13
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 5, // 6
               'per_page_price'     => 15
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 6, // 5 days
               'per_page_price'     => 17
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 7, // 4 days
               'per_page_price'     => 19
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 8, // 3 days
               'per_page_price'     => 21
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 9, // 48 hours
               'per_page_price'     => 23
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 10, // 24 hours
               'per_page_price'     => 25
            ],
            [
               'academic_level_id'  => 4, // Ph.D
               'deadline_id'        => 11, // 12 hours
               'per_page_price'     => 27
            ],

        ]);
    }
}
