@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    @if(Auth::check())
    
    <h1>TASK一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>task</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新規タスク', [],['class' => 'btn btn-danger']) !!}
    
    @else
    login or signup from navbar
    
    @endif
    

@endsection