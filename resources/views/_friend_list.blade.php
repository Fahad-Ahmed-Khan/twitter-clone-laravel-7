<div class="bg-gray-200 rounded-lg py-4 px-6">
<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @if(auth()->user())
    @forelse(auth()->user()->follows as $user)
    <li class="mb-2">
        <div>

            <a href="{{route('profile',$user)}}" class="flex items-center text-sm">
            <img src="{{$user->avatar}}"
                 class="rounded-full mr-2"
                 width="40px"
                 alt="avatar">
            {{$user->name}}
            </a>
        </div>
    </li>
        @empty
        <p class="p-4">No friends yet</p>
    @endforelse
    @endif
</ul>
</div>
