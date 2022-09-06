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
        Schema::create('latihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('votes');
            $table->boolean('confirmed');
            $table->char('name', 100);
            $table->dateTimeTz('created_at_datetime_tz', $precision = 0);
            $table->dateTime('created_at_datetime', $precision = 0);
            $table->date('created_at_date');
            $table->decimal('amount_decimal', $precision = 8, $scale = 2);
            $table->double('amount_double', 8, 2);
            $table->enum('difficulty', ['easy', 'hard']);
            $table->float('amount_float', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('latihans');
    }
};
