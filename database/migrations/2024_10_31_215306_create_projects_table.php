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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('location')->nullable();
            $table->text('about_company');
            $table->string('project_type');
            $table->string('budget');
            $table->string('timeline');
            $table->text('about_project');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
