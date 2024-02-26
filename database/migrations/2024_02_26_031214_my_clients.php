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
        Schema::create('my_clients', function (Blueprint $table) {
        $table->id();
	    $table->string('name', 250)->nullable(false);
	    $table->string('slug', 100)->nullable(false);
	    $table->string('is_project', 30)->nullable(false)->default('0');
	    $table->string('self_capture', 1)->nullable(false)->default('1');
	    $table->string('client_prefix', 4)->nullable(false);
	    $table->string('client_logo', 255)->nullable(false)->default('no-image.jpg');
	    $table->text('address')->nullable(true);
	    $table->string('phone_number', 50)->nullable(true);
	    $table->string('city', 50)->nullable(true);
        $table->timestamp('deleted_at')->nullable(true);
	    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_clients');
    }
};
