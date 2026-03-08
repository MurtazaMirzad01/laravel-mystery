<x-layout>

    <div class="card bg-neutral p-6 ">
        <h2 class="font-bold">You Ideas</h2>

        <div class="mt-2">
            {{$idea->description}}
        </div>
        <div class="mt-5">
            <a href="/ideas/{{$idea->id}}/edit" type="submit"
                    class="btn btn-soft">
                Update
            </a>
        </div>
    </div>
</x-layout>
