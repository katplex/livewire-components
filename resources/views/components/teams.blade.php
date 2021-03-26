@php
$grupos = App\Models\Team::all();
@endphp
<div class="form-group">
    <label>Grupo</label>
    <div wire:ignore>
        <select class="form-control multiselect" id="teams" multiple wire:model.defer="teams">
            @foreach ($grupos as $grupo)
            <option value="{{ $grupo->id }}">
                {{ $grupo->name }}
            </option>
            @endforeach
        </select>
    </div>
    @error('teams') <div class="invalid-feedback" style="display:block !important;">{{ $message }}</div> @enderror
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#teams').on('change', function(e) {
            var data = $(this).select2("val");
            @this.set('teams', data);
        });
    });
</script>
@endpush