<x-default-layout title="Add Major" sectionTitle="Add New Major">
    @if ($errors->any())
    <div class="bg-red-50 border border-red-500 text-red-500 px-3 py-2 rounded mb-4">
        <ul class="list-disc ml-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('majors.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-zinc-300 rounded px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Code</label>
            <input type="text" name="code" value="{{ old('code') }}" class="w-full border border-zinc-300 rounded px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border border-zinc-300 rounded px-3 py-2">{{ old('description') }}</textarea>
        </div>

        <div class="self-end flex gap-2 mt-4">
            <a href="{{ route('majors.index') }}"
                class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer rounded">
                <span>Cancel</span>
            </a>
            <button type="submit"
                class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer rounded">
                <i class="ph ph-floppy-disk block text-blue-500"></i>
                <span>Save</span>
            </button>
        </div>
    </form>
</x-default-layout>
