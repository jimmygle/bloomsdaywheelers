<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'col-sm-' . $labelColumns .' control-label', 'for' => $name]) }}
    <div class="col-sm-{{ $inputColumns % 4 > 3 ? ceil($inputColumns / 4) : floor($inputColumns / 4) }}">{{ Form::text($name . '[]', null, ['class' => 'form-control', 'id' => $name]) }}</div>
    <div class="col-sm-{{ $inputColumns % 4 > 2 ? ceil($inputColumns / 4) : floor($inputColumns / 4) }}">{{ Form::text($name . '[]', null, ['class' => 'form-control']) }}</div>
    <div class="col-sm-{{ $inputColumns % 4 > 1 ? ceil($inputColumns / 4) : floor($inputColumns / 4) }}">{{ Form::text($name . '[]', null, ['class' => 'form-control']) }}</div>
    <div class="col-sm-{{ $inputColumns % 4 > 0 ? ceil($inputColumns / 4) : floor($inputColumns / 4) }}">{{ Form::text($name . '[]', null, ['class' => 'form-control']) }}</div>
</div>