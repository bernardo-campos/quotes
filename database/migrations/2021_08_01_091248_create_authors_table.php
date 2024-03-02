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
            $table->string('description')->nullable();
            $table->text('abstract')->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->date('dob')->nullable(); // date of birth
            $table->string('yob', 6)->nullable(); // year of birth (in case dob is null)
            $table->string('pob')->nullable(); // place of birth
            $table->date('dod')->nullable(); // date of death
            $table->string('yod', 6)->nullable(); // year of death (in case dod is null)
            $table->string('pod')->nullable(); // place of death
            $table->char('letter', 1)->default('?');
            $table->unsignedInteger('popularity')->default(0);
            $table->timestamps();

            $table->fulltext('abstract');
            $table->fulltext('bio');
            $table->index('popularity');
            $table->index('letter');
            $table->softDeletes();
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
