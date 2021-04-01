<div x-data="{ progress: 0, handleFiles() { @this.upload('{{ $component->name }}',  this.$refs.input.files[0], () => {},  () => {}, (event) => { this.progress = event.detail.progress || 0 }); } }" x-cloak>
    <label class="form-control-label">{{ $component->label }}</label>
    @if(! $this->{$component->name} )
    @php $randomId = Str::random(6); @endphp
    <div class="card card-custom bg-info bg-hover-state-info card-stretch card-stretch " wire:target="{{ $component->name }}" wire:loading.remove>
        <label for="file-{{ $randomId }}">
            <input type="hidden" name="{{ $component->name }}" wire.model="{{ $component->name }}" />
            <input type="file" id="file-{{ $randomId }}" class="hidden-input" accept="{{ $component->accept }}" x-ref="input" x-on:change.prevent="handleFiles" />
            <div class="card-body">
                <i class="far fa-image text-white icon-3x ml-n1"></i>
                <div class="text-inverse-info font-weight-bolder font-size-h5 mb-2 mt-5">Seleccionar archivo</div>
                <div class="font-weight-bold text-inverse-info font-size-sm">PNG o JPEG</div>
            </div>
        </label>
    </div>

    <div wire:loading.grid wire:target="upload">
        <div class="card card-custom bg-info card-stretch">
            <div class="card-body my-4" wire:target="{{ $component->name }}">
                <a href="#" class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">Subiendo archivo...</a>
                <div class="font-weight-bold text-white font-size-sm">
                    <i class="fas fa-upload text-white icon-3x ml-n1"></i>
                    <span class="font-size-h2 mr-2" x-text="progress + '%'"></span>
                </div>
                <div class="progress progress-xs mt-7 bg-white-o-90">
                    <div class="progress-bar bg-white" role="progressbar" x-bind:style="'width:' + progress + '%'" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div>
        @if($this->{$component->name})
        <div class="card card-custom overlay">
            <div class="card-body p-0">
                <div class="overlay-wrapper d-flex justify-content-center align-items-center overflow-hidden" style="height: 150px; width: 100vw; max-width: 100%;">
                    @if(gettype($this->{$component->name}) == 'string')
                    <img src="{{ $this->{$component->name} }}" alt="" class="w-100 rounded" />
                    @else
                    @if(collect(['jpg', 'png', 'jpeg', 'webp'])->contains($this->{$component->name}->getClientOriginalExtension()))
                    <img src="{{ $this->{$component->name}->temporaryUrl() }}" alt="" class="w-100 rounded" />
                    @else

                    @endif
                    @endif
                </div>
                <div class="overlay-layer">
                    @if(gettype($this->{$component->name}) == 'string')
                    <a wire:loading.attr="disabled" type="button" wire:click="$set('{{$component->name}}', '')" class="btn font-weight-bold btn-danger btn-shadow">Eliminar</a>
                    @else
                    <a wire:loading.attr="disabled" type="button" x-on:click.prevent="$wire.removeUpload('{{ $component->name }}', '{{ $this->{$component->name}->getFilename() }}')" class="btn font-weight-bold btn-danger btn-shadow">Eliminar</a>
                    @endif
                </div>
            </div>
        </div>
        @endif
    </div>
    @error($component->name) <p class="text-danger">{{ $message }}</p>@enderror
</div>