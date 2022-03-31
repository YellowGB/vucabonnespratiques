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
        Schema::create('outils', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('icon', 2048);
            $table->boolean('selected')->default(false);
            $table->mediumText('strengths');
            $table->mediumText('weaknesses');
            $table->mediumText('opportunities');
            $table->mediumText('threats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outils');
    }
};
