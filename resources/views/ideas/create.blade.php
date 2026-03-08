<x-layout>
    <form method="post" action="/ideas">
        @csrf
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white-900">Create new Idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="textarea w-full @error('description') textarea-error @enderror"></textarea>
                <x-forms.error name="description" />
            </div>
            <p class="mt-3 text-sm/6 text-white-600">Have any Idea?.</p>
        </div>
        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit"
                    class="btn">
                Save
            </button>
        </div>
    </form>
</x-layout>
