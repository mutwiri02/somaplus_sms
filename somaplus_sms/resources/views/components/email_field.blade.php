<div class="box">
    <label for="{{ \Illuminate\Support\Str::snake($name) }}" class="text-left">{{ $name  }}</label>
    <input id="{{ \Illuminate\Support\Str::snake($name) }}" wire:model="{{ \Illuminate\Support\Str::snake($name) }}"
           class="form-control"
           type="email"
    >
    @error(\Illuminate\Support\Str::snake($name))
    <span class="text-left text-danger">{{ $message }}</span>
    @enderror
    <div class="space-30"></div>
</div>
