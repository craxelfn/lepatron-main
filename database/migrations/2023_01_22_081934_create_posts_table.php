<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category_id');
            $table->text('title');
            $table->text('seo_title');
            $table->text('excerpt');
            $table->text('body');
            $table->string('image');
            $table->string('alt');
            $table->string('slug');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->string('status');
            $table->boolean('featured');
            $table->date('date_evenement_debut');
            $table->date('date_evenement_fin');
            $table->text('source_link');
            $table->string('source_text');
            $table->integer('planned');
            $table->integer('views_count');
            $table->integer('order_post');
            $table->string('video');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
