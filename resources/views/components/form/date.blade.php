<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'col-sm-' . $labelColumns .' control-label', 'for' => $name]) }}
    <div class="col-sm-{{ $inputColumns % 3 > 0 ? ceil($inputColumns / 3) : floor($inputColumns / 3) }}">{{ Form::select($name . '[]', array_merge(['' => '-- Month --'], config('registration-form.months')), null, ['class' => 'form-control', 'id' => $name]) }}</div>
    <div class="col-sm-{{ $inputColumns % 3 > 2 ? ceil($inputColumns / 3) : floor($inputColumns / 3) }}">{{ Form::select($name . '[]', array_merge(['' => '-- Day --'], range(1, 31)), null, ['class' => 'form-control']) }}</div>
    <div class="col-sm-{{ $inputColumns % 3 > 1 ? ceil($inputColumns / 3) : floor($inputColumns / 3) }}">{{ Form::select($name . '[]', array_merge(['' => '-- Year --'], array_reverse(range(1940, (int) date('Y') - 6))), null, ['class' => 'form-control']) }}</div>
</div>