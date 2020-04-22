@extends("layout.sample")
@section("content")
    <div class="text-center">
        <h2>タスク一覧</h2>
        @if(count($tasks)>0)
            @foreach($tasks as $task)
            <ul class="list-unstyled">
                 <li class="mt-3">{!! link_to_route("tasks.show",$task->content,["id"=>$task->id]) !!}</li>
                 <li>{{$task->status}}</li>
             </ul>
            @endforeach
        @else
            <div class="alert alert-danger" role="alert">タスクはありません</div>
        @endif
        {!! link_to_route("tasks.create","タスクの作成",[],["class"=>"btn btn-primary"]) !!}
       
       
    </div>
@endsection