@extends('templates.onecolumn')

@section('content')
    <section>
        <div class="row">
            <div class="col s12 m8 offset-m2 l8 offset-l2">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Tasks</span>
                        <span class="">
                            @foreach( $tasks as $task)
                                <p class="checkbox-inline with-icons">
                                    <input type="checkbox" id="{{"task-" . $task->id}}" />
                                    <label for="{{"task-" . $task->id}}" class="clearfix">
                                        <span class="left">{{$task->description}}</span>
                                        <span class="actions right">
                                            <a href=""><i class="material-icons">mode_edit</i></a>
                                            <a href=""><i class="material-icons">delete</i></a>
                                        </span>
                                    </label>
                                </p>
                            @endforeach
                        </span>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop