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
        Schema::create('home_views', function (Blueprint $table) {
            $table->id();

            $table->string('title1section')->nullable();
            $table->text('description1section')->nullable();

            $table->string('title2section')->nullable();

            $table->string('title3section')->nullable();

            $table->string('title4section')->nullable();
            $table->text('description4section')->nullable();
            $table->text('footer4section')->nullable();

            $table->string('title5section')->nullable();
            $table->text('description5section')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_views');
    }
};
