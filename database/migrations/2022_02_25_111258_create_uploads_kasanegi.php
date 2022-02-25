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
        Schema::create('uploads_kasanegi', function (Blueprint $table) {
            $table->id();
            $table->string('userUid',100);
            $table->string('image1',100);
            $table->string('image2',100);
            $table->string('image3',100);
            $table->string('image4',100);
            $table->string('image5',100);
            $table->string('image6',100);
            $table->integer('series')->unsigned();
            $table->string('title',100);
            $table->string('detail',100)->nullable();
            $table->integer('head');
            $table->integer('body');
            $table->integer('arm');
            $table->integer('weist');
            $table->integer('foot');
            $table->integer('likeit')->unsigned()->default(0);
            $table->integer('dislike')->unsigned()->default(0);
            $table->integer('report_count')->unsigned()->default(0);
            $table->integer('made_count')->unsigned()->default(0);
            $table->integer('watch_count')->unsigned()->default(0);
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
        Schema::dropIfExists('uploads_kasanegi');
    }
};
