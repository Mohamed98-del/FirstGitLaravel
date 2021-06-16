<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeletedContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleted_contacts', function (Blueprint $table) {
            $table->bigIncrements('deleted_id');
            $table->string('nom', 13);
            $table->string('prenom', 20);
            $table->string('num', 9);
            $table->string('email', 25);
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
        Schema::dropIfExists('deleted_contacts');
    }
}
