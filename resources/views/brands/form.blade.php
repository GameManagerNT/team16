<div class="form-group">
    {!! Form::label('name', '品牌名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', '國家：') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('since', '成立日期：') !!}
    {!! Form::date('since', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('founder', '創辦人：') !!}
    {!! Form::text('founder', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('headquartersr', '總部：') !!}
    {!! Form::text('headquarters', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('web', '網站：') !!}
    {!! Form::text('web', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
