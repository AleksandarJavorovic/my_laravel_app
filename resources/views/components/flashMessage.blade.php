@props(['message', 'bg' => 'bg-green-600'])

<p class="mb-2 text-sm font-medium text-white px-3 py-2 rounded-md {{ $bg }}">
    {{ $message }}
</p>
