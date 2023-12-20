<div class="form-group">
    {!! Form::label('name', '耳機名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '編號: ') !!}
    {!! Form::select('tid', $brands, $brandSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('genre','種類: ') !!}
    {!! Form::text('genre',null ,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('hz','頻率響應: ') !!}
    {!! Form::text('hz',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('spl', '聲壓級: ') !!}
    {!! Form::text('spl', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('oi', '抗阻: ') !!}
    {!! Form::text('oi', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('weight', '重量：') !!}
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ts', '傳輸：') !!}
    {!! Form::text('ts', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', '價格：') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
