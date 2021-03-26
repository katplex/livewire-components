<div class="form-group">
    <label class="form-control-label">{{ $component->label }}</label>
    <select class="form-control @error($component->name) is-invalid @enderror" wire:model.defer="{{ $component->name }}">
        <option value="">Seleccione</option>
        @foreach ($component->getItems() as $key => $value)
        <option value="{{ $key }}">
            {{ $value }}
        </option>
        @endforeach
    </select>
    @error($component->name) <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>