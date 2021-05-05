<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->String('lastname',60);
            $table->string('firstname',60);
            $table->string('middle_name',60)->nullable();
            $table->foreignId('department_id')
            ->constrained('departments')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('city_id')
            ->constrained('cities')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('state_id')
            ->constrained('states')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('country_id')
            ->constrained('countries')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->char('zip',10);
            $table->date('birth_date')->nullable();
            $table->date('date_hired')->nullable();
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
        Schema::dropIfExists('employes');
    }
}
