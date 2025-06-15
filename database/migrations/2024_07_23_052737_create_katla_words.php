<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('katla.words', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->timestamp('date');
            $table->timestamp('created_at')->useCurrent();
            $table->text('desc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katla.words');
    }
};
