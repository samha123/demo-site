<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerusers', function (Blueprint $table) {
            $table->id();
            $table->string('where_did_you_hear_about_us');
            $table->string('parent_first_name');
            $table->string('parent_middle_name');
            $table->string('parent_last_named');
            $table->string('relationship_with_the_child');
            $table->string('occupation');
            $table->string('company_name');
            $table->integer('moblie_no');
            $table->string('email');
            $table->integer('home_phone');
            $table->integer('other_phone_number');
            $table->string('child_full_name');
            $table->string('gender');
            $table->integer('date_of_birth');
            $table->integer('age');
            $table->string('nationality');
            $table->string('primary_language');
            $table->string('secondary_language');
            $table->string('pervious_school_name');
            $table->string('current_grade');
            $table->integer('enrolment_year');
            $table->string('grade_to_which_seeking_admission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registerusers');
    }
};
