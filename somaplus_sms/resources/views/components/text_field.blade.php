<div class="box text-left">
    <label class="text-left" for="{{ \Illuminate\Support\Str::snake($name) }}">{{ $name  }}</label>
    <input id="{{ \Illuminate\Support\Str::snake($name) }}" wire:model="{{ \Illuminate\Support\Str::snake($name) }}"
           class="form-control"
           type="text"
    >
    @error(\Illuminate\Support\Str::snake($name))
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <div class="space-30"></div>
</div>
