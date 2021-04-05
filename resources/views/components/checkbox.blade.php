<div class="checkbox-list">
    <label class="checkbox">
        <input type="checkbox" wire:model.defer="{{ $component->name}}" />
        <span></span>
        {{ $component->label }}
    </label>
</div>