<x-layout>
	<h1 class="title">Register New Account</h1>
	<form action="{{ route('register') }}" method="POST">
		@csrf
		<div class="mx-auto max-w-screen-sm card">
			{{-- Username --}}
			<div class="mb-4">
				<label for="username">Username</label>
				<input type="text" name="username" value="{{ old('username') }}" class="input @error('username') !ring-red-500 @enderror">
				{{-- Error Message --}}
				@error('username')
					<p class="error">{{ $message }}</p>
				@enderror
			</div>

			{{-- E-Mail --}}
			<div class="mb-4">
				<label for="email">E-Mail</label>
				<input type="text" name="email" value="{{ old('email') }}" class="input @error('email') !ring-red-500 @enderror">
				@error('email')
					<p class="error">{{ $message }}</p>
				@enderror
			</div>

			{{-- Password --}}
			<div class="mb-4">
				<label for="password">Password</label>
				<input type="password" name="password" class="input @error('password') !ring-red-500 @enderror">
				@error('password')
					<p class="error">{{ $message }}</p>
				@enderror
			</div>

			{{-- Confirm Password --}}
			<div class="mb-8">
				<label for="password_confirmation">Confirm Password</label>
				<input type="password" name="password_confirmation" class="input @error('password') !ring-red-500 @enderror">
			</div>

			{{-- Submit Button --}}
			<button class="primary-btn">Register</button>
		</div>
	</form>
</x-layout>