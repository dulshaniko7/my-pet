<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
                $table->id();
                $table->string('name',100);
                $table->string('address',100)->nullable();
                $table->string('image',255)->nullable();
                $table->string('about',200)->nullable();
                $table->string('bank',100)->nullable();
                $table->string('branch',100)->nullable();
                $table->string('accountNo',100)->nullable();

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
        Schema::dropIfExists('doctors');
    }
}
