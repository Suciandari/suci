<div class="form-group{{ $errors->has('name') ? ' has-error' : "}}>
   {!! form::label('name', 'nama', ['class=>'col-md-2 control-label']) !!}
   <div class="col-md-4">
      {!! Form::text('name', null, ['class=>'form-control]) !!}
      {!! $errors->first('name', '<p class="help-block">message</p>') !!}
    </div>
  </div>
  
  <div class="form-group">
      <div class="col-md-offset-2">
         {!! Form::submit('simpan', ['class'=>'btn btn-primary']) !!}
        </div>
      </div>     