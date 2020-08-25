<div class="bg-gray-200 rounded-lg py-4 px-6">
<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @if(auth()->user())
    @foreach(auth()->user()->follows as $user)
    <li class="mb-2">
        <div>

            <a href="{{route('profile',$user)}}" class="flex items-center text-sm">
            <img src="https://i.pravatar.cc/40?u={{$user->email}}"
                 class="rounded-full mr-2"
                 width="40px"
                 alt="avatar">
            {{$user->name}}
            </a>
        </div>
    </li>
    @endforeach

    @endif
</ul>
</div>
