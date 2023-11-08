<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('name')->comment('品牌名稱');
            $table->string('country')->comment('國家');
            $table->date('since')->default('1950-01-01')->comment('成立日期');
            $table->string('founder')->comment('創辦人');
            $table->string('headquarters')->comment('總部');
            $table->string('web')->comment('網站');
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
        Schema::dropIfExists('brands');
    }
}
