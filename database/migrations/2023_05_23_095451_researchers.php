<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researchers', function (Blueprint $table) {
            $table->increments('id_researchers');
            $table->string('pib')->default('');
            $table->tinyInteger('gender')->unsigned()->default(0);
            $table->string('phone')->default(' ');
            $table->string('email')->default('')->unique();
            $table->unsignedInteger('year_birth')->default(0);
            $table->string('country')->default(' ');
            $table->string('city')->default(' ');
            $table->string('work')->default(' ');
            $table->string('degree')->default(' ');
            $table->string('ranks')->default(' ');
            $table->string('interests')->default(' ');
            $table->string('scopus')->default(' ');
            $table->string('publons')->default(' ');
            $table->string('wos')->default(' ');
            $table->string('research_gate')->default(' ');
            $table->unsignedTinyInteger('citation_index')->default(0);
            $table->unsignedTinyInteger('hirsch_index')->default(0);
            $table->unsignedTinyInteger('project_ukr')->default(0);
            $table->unsignedTinyInteger('project_eu')->default(0);
            $table->text('publications')->nullable();
            $table->unsignedSmallInteger('role')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('researchers');
    }
}

