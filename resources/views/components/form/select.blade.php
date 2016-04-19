<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'col-sm-' . $labelColumns .' control-label']) }}
    <div class="col-sm-{{ $inputColumns }}">
        {{ Form::select($name, $options, null, ['class' => 'form-control']) }}
    </div>
</div>