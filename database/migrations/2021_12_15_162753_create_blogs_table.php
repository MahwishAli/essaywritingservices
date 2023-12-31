<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('canonical')->unique()->nullable();
            $table->text('meta_description')->unique()->nullable();
            $table->longText('description')->unique();
            $table->string('image_path')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('is_published')->default(true);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
