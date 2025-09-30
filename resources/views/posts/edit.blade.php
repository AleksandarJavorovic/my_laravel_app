<x-layout>
    <a href="{{ route('dashboard') }}" class="block text-md mb-2 text-blue-500">&larr; Back to the Dashboard</a>
    <div class="card">
        <h2 class="font-bold mb-4">Post update form</h2>
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Post Title --}}
            <div class="mb-4">
                <label for="title">Post Title</label>
                <input type="text" name="title" value="{{ $post->title }}"
                    class="input @error('title') !ring-red-500 @enderror">
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Post Body --}}
            <div class="mb-4">
                <label for="content">Post Content</label>
                <textarea name="content" rows="5" class="input @error('content') !ring-red-500 @enderror">{{ $post->content }}</textarea>
                @error('content')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Post Image if exists --}}
            @if ($post->image)
                <div class="mb-4 h-64 w-1/4 overflow-hidden rounded-md object-cover">
                    <label for="">Current Photo:</label>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image">
                </div>
            @endif

            <div class="mb-4">
                <label for="image"></label>
                <input type="file" name="image" id="image" class="@error('image') !ring-red-500 @enderror">

                @error('image')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <button class="primary-btn">Update</button>
        </form>
    </div>
</x-layout>
