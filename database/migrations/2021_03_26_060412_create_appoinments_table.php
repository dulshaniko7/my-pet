<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->constrained('pets','id')->onDelete('cascade');
            $table->foreignId('petOwner_id')->constrained('pet_owners','id')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('doctors','id')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('appoinment_status','id')->onDelete('cascade');
            $table->date('time')->nullable();
            $table->string('report')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('appoinments');
    }
}
