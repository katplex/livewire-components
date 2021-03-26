<div class="row">
    @foreach($component->elements as $element)
    <div class="col">
        {!! $element->render() !!}
    </div>
    @endforeach
</div>