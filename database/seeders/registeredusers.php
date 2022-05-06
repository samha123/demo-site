<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\hash;

class registeredusers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('registerusers')->insert([
          
            'where_did_you_hear_about_us'=>'wh',
            'parent_first_name'=>'shg',
          'parent_middle_name'=>'b',
          'parent_last_named'=>'cvcg',
        'relationship_with_the_child'=>'parent',
            'occupation'=>'progranner',
            'company_name'=>'tiptop',
          'moblie_no'=>'123',
            'email'=>'simi@gmail',
          'home_phone'=>'123',
           'other_phone_number'=>'3434',
            'child_full_name'=>'hifza',
            'gender'=>'female',
           'date_of_birth'=>'12',
           'age'=>'4',
            'nationality'=>'indian',
         'primary_language'=>'mallu',
            'secondary_language'=>'eng',
            'pervious_school_name'=>'abbbvd',
            'current_grade'=>'4',
            'enrolment_year'=>'2002',
           'grade_to_which_seeking_admission'=>'6',
        ]);
    }
    
}
