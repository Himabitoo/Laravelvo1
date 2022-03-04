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
            $table->string('concept',100);
            $table->integer('series')->unsigned();
            $table->string('comment',3000)->nullable();
            
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
            $table->integer('image_count')->unsigned()->default(0);
            $table->string('thumbnail',100);
            $table->string('img1',100);
            $table->string('img2',100)->nullable();
            $table->string('img3',100)->nullable();
            $table->string('img4',100)->nullable();
            $table->string('img5',100)->nullable();
            $table->string('img6',100)->nullable();
            $table->string('img7',100)->nullable();
            $table->string('img8',100)->nullable();
            $table->string('img9',100)->nullable();
            $table->string('img10',100)->nullable();
            $table->string('img11',100)->nullable();
            $table->string('img12',100)->nullable();
            $table->string('img13',100)->nullable();
            $table->string('img14',100)->nullable();
            $table->string('img15',100)->nullable();
            $table->string('img16',100)->nullable();
            $table->string('img17',100)->nullable();
            $table->string('img18',100)->nullable();
            $table->string('img19',100)->nullable();
            $table->string('img20',100)->nullable();
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
