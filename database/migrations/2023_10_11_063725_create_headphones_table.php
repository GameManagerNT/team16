<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headphones', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->tinyInteger('tid')->unsigned()->comment('廠商(外部鍵)');
            $table->string('name')->comment('型號');
            $table->string('genre')->comment('類型');
            $table->string('hz')->comment('響應頻率');
            $table->double('oi')->unsigned()->comment('抗阻');
            $table->integer('spl')->unsigned()->comment('聲壓級');
            $table->double('weight')->unsigned()->comment('重量');
            $table->string('ts')->comment('傳輸');
            $table->integer('price')->unsigned()->comment('價格');
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
        Schema::dropIfExists('headphones');
    }
}
