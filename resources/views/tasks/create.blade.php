@extends('templates.onecolumn')

@section('content')
    <section>
        <div class="row">
            <form class="col s12" action="{{route("task.store")}}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col s9 offset-s2">
                        <div class="input-field">
                            <div class="input-field">
                                <input name="description" type="text" title="description"/>
                                <label for="description">New Task</label>
                            </div>

                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop