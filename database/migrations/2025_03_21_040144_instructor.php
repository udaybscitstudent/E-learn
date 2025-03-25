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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('First_name',50);
            $table->string('Last_name',50);
            $table->string('Email',100)->unique();
            $table->bigInteger('Mobile')->unique();
            $table->string('Degree',100);
            $table->string('Department',100);
            $table->string('Address',200);
            $table->string('Password',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
