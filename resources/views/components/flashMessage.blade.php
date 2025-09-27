@props(['message', 'bg' => 'bg-green-600'])

<p class="text-sm font-medium text-white px-3 py-2 rounded-md {{ $bg }}">
    {{ $message }}
</p>
