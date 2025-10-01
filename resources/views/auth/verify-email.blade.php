<x-layout>
    <h1 class="mb-4">Please verify your email.</h1>
    <p>If you didn't get the email, press the Send Again button.</p>
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf

        <button class="primary-btn">Send Again</button>
    </form>
</x-layout>
