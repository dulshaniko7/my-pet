<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('breed')->nullable();
            $table->string('bloodGroup')->nullable();
            $table->string('color')->nullable();
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->foreignId('petType_id')->constrained('pet_types','id')->onDelete('cascade');
            $table->foreignId('petOwner_id')->constrained('pet_owners','id')->onDelete('cascade');
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
        Schema::dropIfExists('pets');
    }
}
