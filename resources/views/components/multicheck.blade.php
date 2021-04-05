<div class="my-4">
    <label class="form-label">{{ $component->label }}</label>
    <div class="checkbox-inline">
        @foreach ($component->getItems() as $key => $value)
        <label class="checkbox">
            <input type="checkbox" value="{{ $key }}" wire:model.defer="{{ $component->name }}" />
            <span></span>
            {{ $value }}
        </label>
        @endforeach
    </div>
    @error('{{ component->name }}') <div class="invalid-feedback" style="display:block !important;">{{ $message }}</div> @enderror
</div>