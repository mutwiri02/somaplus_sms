<div class="box text-left">
    <label for="{{ \Illuminate\Support\Str::snake($name) }}">{{ $name  }}</label>

    <select class="form-control" id="{{ \Illuminate\Support\Str::snake($name) }}"
            wire:model="{{ \Illuminate\Support\Str::snake($name) }}">

        @forelse($options as $option => $value)
            <option value="{{$option}}"> {{ $value }}</option>
        @empty
            <option> Select {{ $name }}</option>
        @endforelse
    </select>

    @error(\Illuminate\Support\Str::snake($name))
    <span class="text-danger">{{ $message }}</span>
    @enderror

    <div class="space-30"></div>
</div>
