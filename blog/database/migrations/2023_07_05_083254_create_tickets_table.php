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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('sprint_id')->nullable();
            $table->unsignedBigInteger('developer_id')->nullable();

           // Define foreign key constraint
           $table->foreign('project_id')
           ->references('id')
           ->on('projects')
           ->onDelete('SET NULL');    

           $table->foreign('sprint_id')
           ->references('id')
           ->on('sprints')
           ->onDelete('SET NULL');    

           $table->foreign('developer_id')
           ->references('id')
           ->on('developers')
           ->onDelete('SET NULL');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
