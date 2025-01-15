<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('converted_numbers', function(Blueprint $table){
            $table->unsignedInteger('id', true);
            $table->integer('number');
            $table->string('roman_numerals');
            $table->date('created_at');
            $table->date('updated_at');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('converted_numbers');
    }
};
