<x-default-layout title="Major Detail" sectionTitle="Major Detail">
    <div class="space-y-4">
        <div>
            <label class="block text-zinc-600 font-medium mb-1">Name:</label>
            <div class="px-3 py-2 border border-zinc-300 rounded bg-zinc-50">{{ $major->name }}</div>
        </div>

        <div>
            <label class="block text-zinc-600 font-medium mb-1">Code:</label>
            <div class="px-3 py-2 border border-zinc-300 rounded bg-zinc-50">{{ $major->code }}</div>
        </div>

        <div>
            <label class="block text-zinc-600 font-medium mb-1">Description:</label>
            <div class="px-3 py-2 border border-zinc-300 rounded bg-zinc-50">{{ $major->description }}</div>
        </div>

        <div class="mt-4">
            <a href="{{ route('majors.index') }}"
                class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer rounded inline-block">
                ← Back to List
            </a>
        </div>
    </div>
</x-default-layout>
