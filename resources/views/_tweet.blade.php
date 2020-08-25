<div class="flex p-4 mb-2 border-b border-gray-400">
    <div class="mr-4 flex-shrink-0">
        <a href="{{route('profile',$tweet->user)}}">
        <img src="{{$tweet->user->avatar}}"
             class="rounded-full"
             width="45px"
             alt="avatar">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{route('profile',$tweet->user)}}">
            {{$tweet->user->name}}
            </a>
        </h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>
