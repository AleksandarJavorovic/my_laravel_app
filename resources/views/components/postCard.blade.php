@props(['post', 'full' => false])

<div class="card mb-4">
    {{-- Title --}}
    <h2 class="font-bold text-xl">{{ $post->title }}</h2>

    {{-- Author and Date --}}
    <div>
        <span class="text-xs font-light mb-4">{{ $post->created_at->diffforHumans() }} by</span>
        <a href="{{ route('posts.user', $post->user) }}" class="text-blue-500 font-medium">{{ $post->user->username }}</a>
    </div>

    {{-- Content --}}
    @if ($full)
        <div class="text-sm mt-2">
            <span>{{ Str::words($post->content, 30) }}</span>
        </div>
    @else
        <div class="text-sm mt-2">
            <span>{{ Str::words($post->content, 30) }}</span>
            <a href="{{ route('posts.show', $post) }}" class="text-blue-500 font-medium">Read more &rarr;</a>
        </div>
    @endif

    <div class="flex items-center justify-end gap-4 mt-6">
        {{ $slot }}
    </div>
</div>
