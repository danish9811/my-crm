<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('leads', function (Blueprint $table) {
            $table->engine = 'myIsam';
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('title');
            $table->string('company', 100);
            $table->string('email', 100);
            $table->string('phone_number', 25);
            $table->string('lead_status', 100)->nullable();  // number | and dropdown
            $table->string('lead_source', 100)->nullable();  // number | dropdown
            $table->string('street', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 200)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('country', 150)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('leads');
    }
};
