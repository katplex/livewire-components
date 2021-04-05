<div class="form-group">
    <label class="form-control-label">{{ $component->label }}</label>
    <div wire:ignore>
        <div x-data="{ value: $wire.entangle('{{ $component->name }}').defer }" 
        style="height: 150px"
        x-ref="quillEditor" x-init="
        quill = new Quill($refs.quillEditor, {theme: 'snow'});
        quill.on('text-change', function () {
          $dispatch('quill-input', quill.root.innerHTML);
        });
      " x-on:quill-input="value = $event.detail"> {!! $this->{$component->name} !!}</div>
    </div>
    @error($component->name) <p class="text-danger">{{ $message }}</p>@enderror
</div>