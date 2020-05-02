@extends('layouts.app')

@section('content')

@if(Auth::check())
<!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $task->id }} のTASK詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>TASK</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>STATUS</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このTASKを編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@else

@endif

@endsection