<x-default-layout title="Major" sectionTitle="Majors">
    @if (session('success'))
    <div class="bg-green-50 border border-green-500 text-green-500 px-3 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif
    <div class="flex mb-4">
        <a href="{{ route('majors.create') }}" class="bg-green-50 border border-green-500 px-3 py-2 flex items-center gap-2 rounded">
            <i class="ph-plus block text-green-500"></i>
            <div>Add Major</div>
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-md">
            <thead class="border-b border-zinc-200 text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-center">Code</th>
                    <th class="py-3 px-6 text-center">Description</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-zinc-700 text-sm font-light">
                @forelse ($majors as $major)
                <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                    <td class="py-3 px-6 text-left">{{ $loop->iteration }}</td>
                    <td class="py-3 px-6 text-left">{{ $major->name }}</td>
                    <td class="py-3 px-6 text-center">{{ $major->code }}</td>
                    <td class="py-3 px-6 text-center">{{ $major->description }}</td>
                    <td class="py-3 px-6 text-center flex items-center justify-center gap-2">
                        <a href="{{ route('majors.show', $major->id) }}" class="bg-blue-50 border border-blue-500 px-2 py-1 inline-block rounded">
                            <i class="ph-eye block text-blue-500"></i>
                        </a>
                        <a href="{{ route('majors.edit', $major->id) }}" class="bg-yellow-50 border border-yellow-500 px-2 py-1 inline-block rounded">
                            <i class="ph-note-pencil block text-yellow-500"></i>
                        </a>
                        <form onsubmit="return confirm('Are you sure?')" method="POST" action="{{ route('majors.destroy', $major->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-50 border border-red-500 p-2 rounded">
                                <i class="ph-trash-simple block text-red-500"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-zinc-500">No majors found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-default-layout>
