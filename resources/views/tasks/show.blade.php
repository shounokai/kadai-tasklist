@extends("layout.sample")
@section("content")
    <div class="text-center">
        <h2 class="mb-4">タスク{{$task->id}}</h2>
        <ul class="list-unstyled">
            <li>{{$task->content}}</li>
            <li>{{$task->status}}</li>
        </ul>
        
        {!! link_to_route("tasks.edit","タスクの編集",["id"=>$task->id],["class"=>"btn btn-success"]) !!}
        <p></p>
        {!! Form::model($task,["route"=>["tasks.destroy",$task->id],"method"=>"delete"]) !!}
            {!!Form::submit("タスク削除",["class"=>"btn btn-danger"]) !!}
        {!! Form::close() !!}
        
    </div>
@endsection