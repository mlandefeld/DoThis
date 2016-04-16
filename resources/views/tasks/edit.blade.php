@extends('templates.onecolumn')

@section('content')
    <form action="{{route("task.update", $task->id)}}" method="POST">
        <input name="description" type="text" title="description" placeholder="Description" value="{{$task->description}}"/>
        <button class="btn waves-effect waves-light" type="submit" name="action">Save
            <i class="material-icons right">send</i>
        </button>
        {{ csrf_field() }}

    </form>

@stop