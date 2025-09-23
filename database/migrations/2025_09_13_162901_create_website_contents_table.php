<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteContentsTable extends Migration
{
    public function up()
    {
        Schema::create('website_contents', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // e.g., 'home.slider.title', 'about.header'
            $table->string('page')->nullable(); // e.g., 'home', 'about', 'contact'
            $table->string('section')->nullable(); // e.g., 'slider', 'about', 'footer'
            $table->string('type')->default('text'); // text, image, html, link
            $table->text('content_en')->nullable();
            $table->text('content_ar')->nullable();
            $table->text('content_bg')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->json('attributes')->nullable(); // For additional data like alt text, classes, etc.
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('website_contents');
    }
}