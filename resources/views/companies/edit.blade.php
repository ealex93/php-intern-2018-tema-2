@extends('companies.master')

@section('content')


<div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Edit Company</h3>
      </div>
    </div>
  </div>

  @if(count($errors) > 0)
    <div class="alert alert-danger">
       There were some problems with your input.<br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {!! Form::model($company, ['method'=>'PATCH','route'=>['companies.update', $company->id]])!!}
    @include('companies.form')
  {!! Form::close() !!}



@endsection