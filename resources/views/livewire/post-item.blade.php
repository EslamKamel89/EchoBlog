<div class="flex items-start gap-3 my-3 border-b pb-1 border-b-slate-500">
    <div class="shrink-0 w-12">
        <img class="w-12 h-12 rounded-full overflow-clip" src="{{ $post->user->avatarUrl() }}">
    </div>
    <div class="grow space-y-2">
        <div class="font-bold text-lg">{{ $post->user->name }} <span
                class="mx-8 border rounded-full py-1 px-2 bg-blue-500 text-white">{{ $post->id }}</span></div>
        <div>
            <p>{{ $post->body }}</p>
        </div>
    </div>
</div>