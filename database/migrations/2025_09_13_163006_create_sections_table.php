<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., 'home_about', 'footer_contact'
            $table->string('page'); // e.g., 'home', 'about', 'contact'
            $table->string('type')->default('content'); // content, image, text, html
            $table->string('title_en')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('title_bg')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_ar')->nullable();
            $table->text('content_bg')->nullable();
            $table->string('image')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_text_ar')->nullable();
            $table->string('button_text_bg')->nullable();
            $table->string('button_link')->nullable();
            $table->json('settings')->nullable(); // For layout settings, classes, etc.
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sections');
    }
}