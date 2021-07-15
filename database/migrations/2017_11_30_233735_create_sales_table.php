<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date');
            $table->string('client_name');
            $table->string('carrier');
            $table->string('policy_name');
            $table->string('policy_type');
            $table->integer('policy_amount');
            $table->integer('annual_premium');
            $table->integer('monthly_premium');
            $table->integer('commission_amount');
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
        Schema::dropIfExists('sales');
    }
}
