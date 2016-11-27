<div class="form-group">
    {{ Form::hidden('id', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::hidden('round_id', $round->id, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('type', 'Type:') }}
    {{ Form::select('type', $types,
    null,
    ['id' => 'type', 'class' => 'form-control']) }}
    <!-- // ['id' => 'type', 'class' => 'form&#45;control',  -->
    <!-- // 'tabindex' => '1']) }} -->
</div>
<div class="form-group">
    {{ Form::label('evaluator_id', 'Evaluator:') }}
    @if ($type == 'team_to_adj') 
        {{ Form::select('evaluator_id', $team_names, 
            null,
        ['id' => 'evaluater_id', 'class' => 'form-control']) }}
    @elseif ($type == 'adj_to_adj') 
        {{ Form::select('evaluator_id', $adj_names, 
            null,
        ['id' => 'evaluater_id', 'class' => 'form-control']) }}
    @endif
</div>
<div class="form-group">
    {{ Form::label('evaluatee_id', 'Evaluatee:') }}
    {{ Form::select('evaluatee_id', $adj_names, 
        null,
    ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('score', 'Score:') }}
    {{ Form::text('score', 
        null,
    ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit($submitButton, 
    ['class' => 'btn btn-primary form-control']) }}
</div>
