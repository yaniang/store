@extends('admin/home')

@section('konten')

{{Form::open(array ('method'=>'post','route'=>'produk.store','class'=>'form-horizontal')) }}
 
<div class="form-group">

   {{Form::label('nama_produk', 'Nama Produk',array('class'=>'col-sm-2 control-label'))}}

    <div class="col-sm-7">
        {{Form::text('nama_produk','',array('class' => 'form-control','placeholder'=>'Nama Produk'))}}
    </div>
  </div>
<div class="form-group">
{{Form::label('deskripsi', 'Deskripsi',array('class'=>'col-sm-2 control-label'))}}
      <div class="col-sm-9">
          {{Form::textarea('deskripsi','',array('class' => 'form-control','placeholder'=>'textarea'))}}
      </div>
  </div>
    <div class="form-group">
  <div class="col-md-6 col-md-offset-5">
{!! Form::submit('Save',array('class' => 'btn btn-primary'))!!}
</div>
</div>
{{ Form::close() }}

@stop
