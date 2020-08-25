@extends("components.app")

@section('content')
    <h1>Suggested Friends</h1>
    <hr class="mb-2">
    <ul>
        @if(auth()->user())
            @forelse($users as $user)
                @if(!(auth()->user()->is($user)))
                <li class="mb-2">
                    <div>

                        <a href="{{route('profile',$user)}}" class="flex items-center text-sm">
                            <img src="{{$user->avatar}}"
                                 class="rounded-full mr-2"
                                 width="40px"
                                 height="40px"
                                 alt="avatar">
                            {{$user->name}}
                        </a>
                    </div>
                </li>
                @endif
            @empty
                <p class="p-4">No Peoples yet</p>
            @endforelse
        @endif
    </ul>
@endsection
