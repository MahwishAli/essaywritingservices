<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country');
            $table->string('paper_type');
            $table->string('paper_topic');
            $table->string('language');
            $table->integer('reference');
            $table->string('subject_area');
            $table->string('style');
            $table->string('academic_level');
            $table->integer('number_of_pages');
            $table->string('deadline');
            $table->tinyInteger('spacing')->default(1);
            $table->double('cost_per_page', 8,2);
            $table->double('total_price', 8,2);
            $table->mediumText('detail')->nullable();
            $table->boolean('is_complete')->default(false);


            // "name": "Akeem Ewing",
            // "email": "tazi@mailinator.com",
            // "phone": "+17926165225",
            // "country": "GU",
            // "paper_type": "Research Paper",
            // "language": "not",
            // "reference": "5",
            // "subject_area": "Accounting",
            // "style": "Oxford",
            // "academic_level": "4",
            // "number_of_pages": "39",
            // "deadline": "8",
            // "detail": "Accusamus omnis dolor quo ab labore repellendus Et at neque eius voluptas voluptates quasi tempor delectus dolor nulla sed",
            // "spacing": "option2",

            $table->timestamps();

            // $table->string('topic');
            // $table->string('deadline');
            // $table->string('no_of_words');
            // $table->string('no_of_references');
            // $table->string('file_path')->nullable();
            // $table->double('cost_per_page', 8,2);
            // $table->double('total_cost', 8,2);

            // $table->foreignId('statuse_id')->constrained('statuses')->onDelete('cascade');
            // $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            // $table->foreignId('paper_type_id')->constrained('paper_types')->onDelete('cascade');
            // $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            // $table->foreignId('education_level_id')->constrained('education_levels')->onDelete('cascade');
            // $table->foreignId('reference_style_id')->constrained('reference_styles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
