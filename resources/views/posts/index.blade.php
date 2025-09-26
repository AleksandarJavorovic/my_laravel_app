<x-layout>
	<h1 class="title">Latest Posts</h1>
	<div class="grid grid-cols-2 gap-6">
		@foreach ($posts as $post)
			<div class="card mb-4">
				{{-- Title --}}
				<h2 class="font-bold text-xl">{{ $post->title }}</h2>

				{{-- Author and Date --}}
				<div>
					<span class="text-xs font-light mb-4">{{ $post->created_at->diffforHumans() }} by</span>
					<a href="" class="text-blue-500 font-medium">Username</a>
				</div>

				{{-- Content --}}
				<div class="text-sm mt-2">
					<p>{{ Str::words($post->content, 30) }}</p>

				</div>
			</div>
		@endforeach
	</div>

	<div>{{ $posts->links() }}</div>

</x-layout>