<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'users', function( Blueprint $table ) {
            $table->increments( 'id' );
            $table->string( 'first_name', 100 );
            $table->string( 'last_name', 100 );
            $table->string( 'email', 100 )->unique();
            $table->string( 'password' )->nullable();
            $table->enum( 'status', ['pending', 'active', 'suspended', 'deleted'] )->default( 'pending' );
            $table->rememberToken();
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
        Schema::dropIfExists( 'users' );
    }
}
