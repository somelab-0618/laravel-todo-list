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
        // 型を変更
        Schema::table('todos', function (Blueprint $table) {
            $table->boolean('is_done')->default(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 型を戻す
        Schema::table('todos', function (Blueprint $table) {
            $table->renameColumn('is_done', 'status');
        });
    }
}
