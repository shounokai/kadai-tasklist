@extends("layout.sample")
@section("content")
    <div class="text-center">
        <h2 class="mb-4">タスク{{$task->id}}</h2>
        <p>{{$task->content}}</p>
        {!! link_to_route("tasks.create","タスクの作成",[],["class"=>"btn btn-primary"]) !!}
        <p></p>
        {!! Form::model($task,["route"=>["tasks.destroy",$task->id],"method"=>"delete"]) !!}
            {!!Form::submit("タスク削除",["class"=>"btn btn-danger"]) !!}
        {!! Form::close() !!}
        
    </div>
@endsection