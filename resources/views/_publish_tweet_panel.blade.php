<div class="border border-blue-800  rounded-lg px-6 py-4 mb-6">
    <form action="/tweets" method="post">
        @csrf
                <textarea name="body" id="body"
                          class="w-full"
                          required
                          placeholder="What's up doc?"
                          cols="30" rows="2"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}"
                 class="rounded-full mr-2"
                 width="40px"
                 alt="avatar">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
            >Tweet-a-root</button>
        </footer>
        @error('body')
            <p class="text-red-400 text-sm">{{$message}}</p>
        @enderror
    </form>
</div>
