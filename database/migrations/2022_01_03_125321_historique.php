<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Historique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('module_id');
            $table->double('value');
            $table->timestamps();
        });
        DB::unprepared('ALTER TABLE `historique` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `module_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historique');
    }
}
