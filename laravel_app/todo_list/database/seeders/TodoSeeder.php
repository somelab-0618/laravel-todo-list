<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            [
                'comment' => 'todo-1',
                'status' => 'wip'
            ],
            [
                'comment' => 'todo-2',
                'status' => 'wip'
            ],
            [
                'comment' => 'todo-3',
                'status' => 'wip'
            ],
        ]);
    }
}
