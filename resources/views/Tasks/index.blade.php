@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>
@if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('Tasks.show', $task->id, ['Task' => $task->id]) !!}</td>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
@endif

    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('Tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection