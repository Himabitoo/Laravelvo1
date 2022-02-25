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
        Schema::create('uploads_def', function (Blueprint $table) {
            $table->id();
            $table->string('userUid',100);
            $table->string('title',100);
            $table->string('details',100)->nullable();
            $table->string('image1',100);
            $table->string('image2',100);
            $table->string('image3',100);
            $table->string('image4',100);
            $table->string('image5',100);
            $table->string('image6',100);
            $table->integer('watch_count')->unsigned()->default(0);
            $table->integer('likeit')->unsigned()->default(0);
            $table->integer('dislike')->unsigned()->default(0);
            $table->integer('report_count')->unsigned()->default(0);
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
        Schema::dropIfExists('uploads_def');
    }
};
