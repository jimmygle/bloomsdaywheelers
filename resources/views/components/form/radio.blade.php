<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'col-sm-' . $labelColumns .' control-label']) }}
    <div class="col-sm-{{ $inputColumns }}">
        @foreach ($options as $value => $radioLabel)
            <label class="radio-inline">
                {{ Form::radio($name, $value, null) }} {{ $radioLabel }}
            </label>
        @endforeach
    </div>
</div>