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
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('title')->nullable();
            $table->string('video')->nullable();
            $table->string('video_caption')->nullable();
            $table->longText('about')->nullable();
            $table->longText('privacy')->nullable();
            $table->longText('tearms')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('hero_section')->nullable();
            $table->string('about_image')->nullable();
            $table->string('ceo_name')->nullable();
            $table->string('ceo_image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->longText('address')->nullable();
            $table->longText('map')->nullable();
            $table->string('office_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};
