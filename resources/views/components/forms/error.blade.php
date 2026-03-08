@props([
    'name' => 'required'
])
@error($name)
<p class="text-xs text-red-500">{{$message}}</p>
@enderror
