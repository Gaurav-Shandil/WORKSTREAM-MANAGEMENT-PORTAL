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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->string('name');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->decimal('total_volume', 10, 2)->virtualAs('length * width * height');
            $table->decimal('iron_weight', 10, 2)->default('0');
            $table->integer('no_of_components');
            $table->integer('completed_components')->default(0); // Add a column to store completed components
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
