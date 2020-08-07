<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('blue_tag');
            $table->unsignedBigInteger('agency_id');
            $table->unsignedBigInteger('team_id');
            $table->float('hourly_pay', 10, 2)->default(0.00);
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('end_date')->nullable();
            $table->boolean('active_flag')->default(FALSE);
            $table->string('end_reason')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('agency_id')->references('id')->on('agencies');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
