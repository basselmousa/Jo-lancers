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
        Schema::create('service_provider_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId("service_provider_id")->constrained("service_providers")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("service_type_id")->constrained("service_types")->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_provider_types');
    }
};
