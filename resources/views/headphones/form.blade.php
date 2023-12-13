<div class="form-group">
    {!! Form::label('tid', '廠牌：') !!}
    {!! Form::select('tid', $brands, $brandSelected, ['class' => 'form-control']) !!}
<div class="form-group">
    {!! Form::label('name', '型號：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
</div>
<div class="form-group">
    {!! Form::label('genre','類型:') !!}
    {!! Form::text('genre',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('hz','響應頻率(HZ):') !!}
    {!! Form::text('hz', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('spl', '聲壓級(db/mW)：') !!}
    {!! Form::text('spl', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('oi', '抗阻(Ω)：') !!}
    {!! Form::text('oi', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('weight', '重量(g)：') !!}
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ts', '傳輸：') !!}
    {!! Form::text('ts', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', '價格(NTD)：') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
