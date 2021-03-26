<div class="form-group">
    <label class="form-control-label">{{ $component->label }}</label>
    <input type="{{ $component->type }}" placeholder="{{ $component->label }}" class="form-control @error($component->name) is-invalid @enderror" wire:model.defer="{{ $component->name }}"/>
    @error($component->name) <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>