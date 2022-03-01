<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTodosTableColumnStatusToIsDone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->renameColumn('status', 'is_done');
        });

        Schema::table('todos', function (Blueprint $table) {
            $table->boolean('is_done')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->string('is_done')->change();
        });

        Schema::table('todos', function (Blueprint $table) {
            $table->renameColumn('is_done', 'status');
        });
    }
}
