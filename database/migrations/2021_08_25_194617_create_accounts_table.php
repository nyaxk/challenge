<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('users_id');
            $table->string('agency', 50);
            $table->unsignedBigInteger('number');
            $table->unsignedInteger('digit');
            $table->string('corporateName', 50)->nullable();
            $table->string('fantasyName', 50)->nullable();
            $table->unsignedBigInteger('cnpj')->unique()->nullable();
            $table->enum('type', ['person', 'company']);
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
        Schema::dropIfExists('accounts');
    }
}
