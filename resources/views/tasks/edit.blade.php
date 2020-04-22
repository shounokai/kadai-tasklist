@extends("layout.sample")
@section("content")
    <h2 class="mb-4 text-center">タスク編集</h2>
        <div class="text-center">
           
                {!! Form::model($task,["route"=>["tasks.update",$task->id],"method"=>"put"]) !!}
                    <div class="form-group">
                        {!! Form::label("status","ステータス") !!}
                        {!! Form::text("status",null,["class"=>"form-control"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label("content","タスク:") !!}
                        {!! Form::text("content",null,["class"=>"form-control"]) !!}
                    </div>
                    {!! Form::submit("保存",["class"=>"btn btn-success"]) !!}
                {!! Form::close() !!}
            
        </div>
@endsection