<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->comment('Марка автомобиля');
            $table->string('model')->comment('Модель автомобиля');
            $table->string('number')->comment('Номер автомобиля');
            $table->string('color')->comment('Цвет');
            $table->boolean('is_paid')->default(false)->comment('Оплачено или нет');
            $table->text('comments')->nullable()->comment('Дополнительный комментарий');
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
        Schema::dropIfExists('cars');
    }
}
