<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTodosTableWithCompletedAtColumn extends Migration
{

    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->timestamp('completed_at')
                ->nullable()->default(null)
                ->after('content');
        });
    }


    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->dropColumn('completed_at');
        });
    }
}
