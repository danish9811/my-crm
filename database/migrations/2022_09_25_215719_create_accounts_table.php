<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_name', 100);
            $table->string('phone_number', 30);
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('accounts');
    }
};