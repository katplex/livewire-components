<div>
    <label class="form-label">{{ $component->label }}</label>
    <span class="switch switch-icon">
        <label>
            <input type="checkbox" {{ $this->{$component->name} ? 'checked' : '' }} />
            <span wire:click="check"></span>
        </label>
    </span>
</div>