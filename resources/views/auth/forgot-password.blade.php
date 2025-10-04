<x-layout>
    <h1 class="title">Request a password reset</h1>

    {{-- Session Message --}}
    @if (session('status'))
        <x-flashMessage message="{{ session('status') }}" />
    @endif

    <form action="{{ route('password.request') }}" method="POST" x-data="formSubmit" @submit.prevent="submit">
        @csrf
        <div class="mx-auto max-w-screen-sm card">
            {{-- E-Mail --}}
            <div class="mb-4">
                <label for="email">E-Mail</label>
                <input type="text" name="email" value="{{ old('email') }}"
                    class="input @error('email') !ring-red-500 @enderror">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            {{-- Submit Button --}}
            <button x-ref="btn" class="primary-btn">Submit</button>
        </div>
    </form>
</x-layout>
