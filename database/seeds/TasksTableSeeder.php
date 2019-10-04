<?php

use Illuminate\Database\Seeder;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->id = 1;
        $task->title = 'Cong viec 1';
        $task->content = 'Noi dung cong viec 1';
        $task->due_date = '2017-07-20';
        $task->image = '';
        $task->save();

        $task = new Task();
        $task->id = 2;
        $task->title = 'Cong viec 2';
        $task->content = 'Noi dung cong viec 2';
        $task->due_date = '2015-06-20';
        $task->image = '';
        $task->save();


        $task = new Task();
        $task->id = 3;
        $task->title = 'Cong viec 3';
        $task->content = 'Noi dung cong viec 3';
        $task->due_date = '2012-06-04';
        $task->image = '';
        $task->save();
    }
}
