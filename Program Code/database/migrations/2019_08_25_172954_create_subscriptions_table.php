<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('user_name');
            $table->bigInteger('user_id');	
            $table->string('prefix');
            $table->string('department');
            $table->string('contact');
            $table->string('semester');
            $table->string('vehicle_reg');
            $table->string('car_info');
            $table->string('address');
            $table->binary('dlicense');
            $table->binary('pphoto');
            $table->binary('iphoto');
            $table->binary('signature');
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
        Schema::dropIfExists('subscriptions');
    }
}
