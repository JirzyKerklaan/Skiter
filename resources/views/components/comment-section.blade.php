@props(["comments", "message"])
<div>
    <form action="{{route('comment.store', $message)}}" method="post">
        @csrf
        <input type="text" name="text" class="shadow rounded-md bg-[#00000020] placeholder:font-normal text-[#c5c5c5] appearance-none w-full focus:outline-[#c5c5c5] rounded py-4 px-3 leading-tight focus:outline-none">
    </form>

@foreach($comments as $comment)
        <div class="chat chat-start">
            <div class="chat-header">
                {{$comment->user->name}}
                <time class="text-xs opacity-50">{{$comment->created_at->diffForHumans()}}</time>
            </div>
            <div class="chat-bubble">{{$comment->text}}</div>

        </div>

@endforeach
</div>
