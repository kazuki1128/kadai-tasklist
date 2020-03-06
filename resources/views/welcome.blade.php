@extends('layouts.app')

@section('content')
    @if (Auth::check())
         <h1>{{ Auth::user()->name }}のタスク一覧</h1>
         @if(count($tasks) > 0)
             @include('tasks.index', ['tasks' => $tasks])
         @endif
          {!! link_to_route('tasks.create', '新規タスクの登録', null, ['class' => 'btn btn-primary']) !!}
    @else
        <div class="center jumbotron">
        <div class="text-center">
            <h1>Tasklist start?</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
    </div>
    @endif
@endsection