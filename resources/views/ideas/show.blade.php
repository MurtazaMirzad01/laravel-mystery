<x-layout>

    <div class="mt-10 text-white">
        <h2 class="font-bold">You Ideas</h2>

        <div class="mt-2">
            {{$idea->description}}
        </div>
        <div class="mt-5">
            <a href="/ideas/{{$idea->id}}/edit" type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Update
            </a>
        </div>
    </div>
</x-layout>
