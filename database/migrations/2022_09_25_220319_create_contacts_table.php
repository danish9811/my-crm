<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name', 100);
            $table->foreignId('account_id')->references('id')->on('accounts');
            $table->string('email', 200)->nullable();
            $table->string('phone_number', 30);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('contacts');
    }
};
