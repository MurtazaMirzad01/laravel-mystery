<x-layout>
    @if($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">You Ideas</h2>
            <ul class="mt-5">
                @foreach($ideas as $idea)
                    <a href="/ideas/{{$idea->id}}" class="text-sm"> {{$idea->description}} </a>.<br>
                @endforeach
            </ul>
        </div>
    @else
        <p> No Ideas yet, <a href="ideas/create" class="underline">Create one</a></p>
    @endif
</x-layout>
