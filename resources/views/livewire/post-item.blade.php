<div>
    <div>
        <img src="{{ $post->user->avatarUrl() }}">
    </div>
    <div>
        <div class="font-bold text-lg">{{ $post->user->name }}</div>
        <div>
            <p>{{ $post->body }}</p>
        </div>
    </div>
</div>