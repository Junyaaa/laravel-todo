@extends('layouts.app')

@section('title', 'Index')

@section('content')

<div class="container">
    {{-- <div class="card-deck"> --}}
        <div class="row">
            <div class="col col-md-4">
              <nav class="panel panel-default">
                <div class="panel-heading">フォルダ</div>
                <div class="panel-body">
                  <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
                    フォルダを追加する
                  </a>
                </div>
                <div class="list-group">
                  @foreach($folders as $folder)
                    <a
                    href="{{ route('todos.index', ['id' => $folder->id]) }}"
                    class="list-group-item {{ $folder_id === $folder->id ? 'active' : '' }}">
                    </a>
                  @endforeach
                </div>
              </nav>
            </div>
            <div class="column col-md-8">
              <!-- ここにタスクが表示される -->
              <div class="panel panel-default">
                <div class="panel-heading">タスク</div>
                <div class="panel-body">
                  <div class="text-right">
                    <a href="#" class="btn btn-default btn-block">
                      タスクを追加する
                    </a>
                  </div>
                </div>
                <table class="table">
                  <thead>
                  <tr>
                    <th>タイトル</th>
                    <th>状態</th>
                    <th>期限</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $task)
                      <tr>
                        <td>{{ $task->title }}</td>
                        <td>
                          <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
                        </td>
                        <td>{{ $task->formatted_due_date }}</td>
                        <td><a href="#">編集</a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        {{-- <div class="card m-3 w-75">
            <div class="card-header">
                <h4>タスク</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('store') }}" class="row row-cols-lg-auto g-3 align-items-center mb-3">
                    @csrf

                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="タスクを作成する" value="{{ old('task') }}" name="task" style="width: 108%"/>
                    </div>

                    <div class="col-2 ps-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    @error('task')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </form>

                @if ($tasks->isNotEmpty())
                <ul class="list-group">
                    @foreach($tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="mt-1 me-auto">
                            {{ $task->task }}
                        </div>
                        <span class="badge rounded-pill">

                            <form class="text-end" method="post" action="{{ route('destroy', $task->id) }}" id="form-{{ $task->id }}">
                                @csrf
                                @method('DELETE')

                                <!-- edit !-->
                                <a href="{{ route('edit', $task->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </span>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div> --}}
</div>

@endsection
