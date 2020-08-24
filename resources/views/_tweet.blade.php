<div class="flex p-4 mb-2 border-b border-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img src="https://i.pravatar.cc/50?u={{$tweet->user->email}}"
             class="rounded-full"
             alt="avatar">
    </div>
    <div>
        <h5 class="font-bold mb-4">
            {{$tweet->user->name}}
        </h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>
