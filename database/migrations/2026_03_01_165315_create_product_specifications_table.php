<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');

            $table->decimal('calories', 8, 2)->nullable();
            $table->decimal('total_fat', 8, 2)->default(0);
            $table->decimal('saturated_fat', 8, 2)->default(0);
            $table->decimal('trans_fat', 8, 2)->default(0);
            $table->decimal('carbohydrates', 8, 2)->nullable();
            $table->decimal('sugars', 8, 2)->nullable();
            $table->decimal('protein', 8, 2)->nullable();

            $table->text('vitamins')->nullable();
            $table->text('minerals')->nullable();
            $table->text('benefits')->nullable(); // previene alergias, energía natural, etc

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('product_specifications');
    }
};