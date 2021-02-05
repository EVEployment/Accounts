<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsiClientsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('esi_clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('login_endpoint');
            $table->string('esi_endpoint');
            $table->string('tenant');
            $table->string('client_id');
            $table->string('client_secret');
            $table->string('callback_url');
            $table->string('provider');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('esi_clients');
    }
}
