<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('HospitalName',100);
            $table->string('RegNo',10);
            $table->string('address',100)->nullable();
            $table->string('image',10)->nullable();
            $table->string('about',200)->nullable();
            $table->string('bank',10)->nullable();
            $table->string('branch',10)->nullable();
            $table->string('accountNo',10)->nullable();


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
        Schema::dropIfExists('hospitals');
    }
}
