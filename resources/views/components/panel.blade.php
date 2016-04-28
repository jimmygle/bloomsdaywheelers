<div class="panel panel-{{ $context or 'default' }}">

    @if ($header)
        <div class="panel-heading">
            <h3 class="panel-title">{{ $header }}</h3>
        </div>
    @endif

    @if ($content)
    <div class="panel-body{{ $scrollable ? ' scrollable' : '' }}"{!! $scrollable ? ' style="height:' . $scrollableHeight . ';"' : '' !!}>
        {!! $content !!}
    </div>
    @endif

    {!! $table or '' !!}

    @if ($footer)
        <div class="panel-footer">{{ $footer }}</div>
    @endif

</div>