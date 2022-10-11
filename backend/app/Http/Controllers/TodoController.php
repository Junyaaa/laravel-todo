<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Todo;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    // 多分Todoのためのコードだから一旦コメントアウト

    // private $todo;

    // /**
    //  * Todo constructor.
    //  *
    //  * @param App\Models\Todo $todo
    //  *
    //  **/
    // public function __construct(Todo $todo)
    // {
    //     $this->todo = $todo;
    // }


// 追加ファイル
    public function  index(int $id)
{
    // すべてのフォルダを取得する
    $folders = Folder::all();

    // 選ばれたフォルダを取得する
    $current_folder = Folder::find($id);

    // 選ばれたフォルダに紐づくタスクを取得する
    $tasks = $current_folder->todos()->get();

    return view('todos/index', [
        'folders' => $folders,
        'current_folder_id' => $current_folder->id,
        'todos' => $todos,
    ]);
}



// 下の全てのデフォルトをコメントアウト

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $tasks = $this->todo->latest()->get();

    //     return view('todo.index')->with('tasks', $tasks);
    // }


    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return Redirect
    //  */
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'task' => 'required|min:1|max:50'
    //     ]);

    //     $todo       = new Todo;
    //     $todo->task = $request->task;
    //     $todo->save();

    //     return redirect()->back();
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  Integer $id
    //  * @return View
    //  */
    // public function edit($id)
    // {
    //     $task = $this->todo->findOrFail($id);

    //     return view('todo.edit')
    //             ->with('task',$task)
    //             ->with('id', $id);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  Integer $id
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return Redirect
    //  */
    // public function update($id, Request $request)
    // {
    //     $validated = $request->validate([
    //         'task' => 'required|min:1|max:50'
    //     ]);

    //     $todo         = $this->todo->find($id);
    //     $todo->task   = $request->task;
    //     $todo->save();

    //     return redirect()->route('index');

    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  Integer $id
    //  * @return Redirect
    //  */
    // public function destroy($id)
    // {
    //     $this->todo->destroy($id);

    //     return redirect()->back();
    // }
}
