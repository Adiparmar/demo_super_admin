<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('owner_id'); // Removed foreign key constraint
            $table->unsignedBigInteger('package_id'); // Removed foreign key constraint
            $table->text('address');
            $table->string('contact_number');
            $table->string('contact_email')->unique()->nullable();
            $table->time('opening_time');
            $table->time('closing_time');
            $table->enum('gender', ['male', 'female', 'unisex']);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salons');
    }
};
