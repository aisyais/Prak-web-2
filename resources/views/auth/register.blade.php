<x-auth-layout title="Register" section_title="Register using your email" section_description="Register" class="flex-col gap-4 mt-2">
    <form action="{{ route('auth.store') }}" method="POST" class="flex-col gap-4">
        @csrf
        @method('POST')

        <div class="flex flex-col gap-2">
            <label for="name" class="font-semibold text-sm">Name</label>
            <input type="text" id="name" name="name" class="px-3 py-2 border border-zinc-300 bg-slate-50 rounded" placeholder="Your name" value="{{ old('name') }}">
            @error('name')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="email" class="font-semibold text-sm">Email</label>
            <input type="email" id="email" name="email" class="px-3 py-2 border border-zinc-300 bg-slate-50 rounded" placeholder="Your email" value="{{ old('email') }}">
            @error('email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="password" class="font-semibold text-sm">Password</label>
            <input type="password" id="password" name="password" class="px-3 py-2 border border-zinc-300 bg-slate-50 rounded" placeholder="Your password">
            @error('password')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="confirm_password" class="font-semibold text-sm">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" class="px-3 py-2 border border-zinc-300 bg-slate-50 rounded" placeholder="Confirm your password">
            @error('confirm_password')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 border border-blue-500 text-blue px-3 py-2 text-center cursor-pointer mt-4 rounded">
            <span>Register</span>
        </button>
    </form>

    <p class="text-zinc-600 text-sm text-center">
        Already have an account?
        <a href="{{ route('auth.login') }}" class="text-blue-500 font-semibold underline">Login Here!</a>
    </p>
</x-auth-layout>
