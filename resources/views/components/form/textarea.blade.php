<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'col-sm-' . $labelColumns .' control-label']) }}
    <div class="col-sm-{{ $inputColumns }}">
        {{ Form::textarea($name, null, ['class' => 'form-control', 'rows' => $rows]) }}
    </div>
</div>