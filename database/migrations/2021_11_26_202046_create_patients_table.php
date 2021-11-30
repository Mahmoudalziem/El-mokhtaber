<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('age');
            $table->smallInteger('price');
            $table->string('register');
            $table->string('collect');
            $table->string('auth');
            $table->string('print');
            $table->bigInteger('visit');
            $table->enum('gender', ['male', 'female']);
            $table->enum('result', ['postive', 'negative']);
            $table->string('visit_date');
            $table->string('pay_date');
            $table->string('result_date');
            $table->string('branch');
            $table->string('pay_username');
            $table->bigInteger('client_id');
            $table->bigInteger('patient_id');
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
        Schema::dropIfExists('patients');
    }
}
