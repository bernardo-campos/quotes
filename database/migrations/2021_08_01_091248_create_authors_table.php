<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->string('name');
            $table->string('image')->nullable();
            $table->char('letter', 1)->default('?');
            $table->string('description')->nullable();
            $table->unsignedInteger('popularity')->default(0);
            $table->timestamps();

            $table->index('popularity');
            $table->index('letter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
