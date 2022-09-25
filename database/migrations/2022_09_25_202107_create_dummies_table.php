<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('dummies', function (Blueprint $table) {
            $table->engine = 'myIsam';
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('phone_number')->unique();
            $table->string('address');
            $table->string('ip_address')->unique();
            $table->unsignedInteger('age');
            $table->string('bitcoin_address');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('dummies');
    }
};
