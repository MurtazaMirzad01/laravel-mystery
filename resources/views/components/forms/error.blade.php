@props([
    'name' => 'required'
])
@error($name)
<p class="text-xs text-error">{{$message}}</p>
@enderror
