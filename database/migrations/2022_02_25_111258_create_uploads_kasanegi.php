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
            $table->string('img1',100);
            $table->string('img2',100)->nullable();
            $table->string('img3',100)->nullable();
            $table->string('img4',100)->nullable();
            $table->string('img5',100)->nullable();
            $table->string('img6',100)->nullable();
            $table->integer('series')->unsigned();
            $table->string('concept',100);
            $table->string('comment',100)->nullable();
            $table->integer('sex')->nullable();
            $table->string('head');
            $table->string('body');
            $table->string('arm');
            $table->string('waist');
            $table->string('foot');
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
