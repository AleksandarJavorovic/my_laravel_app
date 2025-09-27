<x-layout>
    <h1 class="title">Hello {{ auth()->user()->username }}</h1>
    <div class="card mb-4">
        <h2 class="font-bold mb-4">Create a new post</h2>


        {{-- Success Message --}}
        @if (session('success'))
            <div class="mb-2">
                <x-flashMessage message="{{ session('success') }}" />
            </div>
        @endif

        {{-- Post Creation Form --}}
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            {{-- Post Title --}}
            <div class="mb-4">
                <label for="title">Post Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="input @error('title') !ring-red-500 @enderror">
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Post Body --}}
            <div class="mb-4">
                <label for="content">Post Content</label>
                <textarea name="content" rows="5" class="input @error('content') !ring-red-500 @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <button class="primary-btn">Create</button>
        </form>
    </div>

</x-layout>
