<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('amount', 10, 2)->default(0.00);
            $table->string('deal_name', 100);
            $table->date('closing_date');
            $table->string('deal_stage', 100)->nullable();

            $table->foreignId('account_id')->references('id')->on('accounts');
            $table->foreignId('contact_id')->references('id')->on('contacts');

            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('deals');
    }
};
