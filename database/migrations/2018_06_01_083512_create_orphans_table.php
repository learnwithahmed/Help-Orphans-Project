<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrphansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orphans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->integer('education_status')->nullable(); // 1->Educated, 0->Non.
            $table->string('education_level')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('living_place');
            $table->integer('health_status'); // On Scale From 1 - 10. (1 is the Worst).
            $table->integer('financial_status'); // On Scale From 1 - 10. (1 is the Worst).
            $table->integer('family_status')->nullable(); //Has Family or not. 1->Yes, 0->No.
            $table->integer('family_count')->nullable();
            $table->integer('help_kind_needed');
            $table->integer('help_priority_level'); // On Scale from 1 - 3. (3 is Critical).
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
        Schema::dropIfExists('orphans');
    }
}
