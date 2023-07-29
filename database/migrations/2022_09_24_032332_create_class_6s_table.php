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
        Schema::create('class_6s', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("section")->nullable();
            $table->string("roll")->nullable();
            $table->string("বাংলা ব্যাকরণ ও নির্মিতি")->nullable();
            $table->string("আনন্দ পাঠ")->nullable();
            $table->string("English")->nullable();
            $table->string("গণিত")->nullable();
            $table->string("বিজ্ঞান")->nullable();
            $table->string("চারুপাঠ")->nullable();
            $table->string("চারু ও কারুকলা")->nullable();
            $table->string("বাংলাদেশ ও বিশ্বপরিচয়")->nullable();
            $table->string("ক্ষুদ্র ও নৃগোষ্ঠীর ভাষা ও সংস্কৃতি")->nullable();
            $table->string("কৃষি শিক্ষা")->nullable();
            $table->string("গার্হস্থ্য বিজ্ঞান")->nullable();
            $table->string("শারীরিক শিক্ষা ও স্বাস্থ্য")->nullable();
            $table->string("তথ্য ও যোগাযোগ প্রযুক্তি")->nullable();
            $table->string("কর্ম ও জীবনমুকী শিক্ষা")->nullable();
            $table->string("ইসলাম ও নৈতিক শিক্ষা")->nullable();
            $table->string("হিন্দুধর্ম ও নৈতিক শিক্ষা")->nullable();
            $table->string("বৌদ্ধধর্ম ও নৈতিক শিক্ষা")->nullable();
            $table->string("খ্রিষ্টধর্ম ও নৈতিক শিক্ষা")->nullable();
            $table->string("Total")->nullable();
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
        Schema::dropIfExists('class_6s');
    }
};
