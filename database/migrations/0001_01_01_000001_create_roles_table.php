<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
{
    Schema::create('roles', function (Blueprint $table) {
        $table->id();                         
        $table->string('name', 50)->unique();  
        $table->string('guard_name', 50)->default('web');
        $table->timestamps();                  
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
