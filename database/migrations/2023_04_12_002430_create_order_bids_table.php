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
        Schema::create('order_bids', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")->constrained("posts")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("service_type_id")->constrained("service_types")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("service_provider_id")->constrained("service_providers")->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("bid");
            $table->string("proposal");
            $table->string("deliver_in_days");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_bids');
    }
};
