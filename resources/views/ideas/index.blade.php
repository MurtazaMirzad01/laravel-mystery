<x-layout>
    @if($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">You Ideas</h2>
            <ul class="mt-5 grid grid-cols-2 gap-x-6 gap-y-4">
                @foreach($ideas as $idea)
                   <x-idea-card href="/ideas/{{$idea->id}}">
                    {{ $idea->description }}
                    </x-idea-card>
                @endforeach
            </ul>
        </div>
    @else
        <p> No Ideas yet, <a href="ideas/create" class="underline">Create one</a></p>
    @endif

    <p class="mt-6">
        <a href="ideas/create" class="underline">Create one</a>
    </p>
</x-layout>
