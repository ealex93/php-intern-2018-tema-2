@extends('companies.master')
@section('content')

    <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Company </h3> <a class="btn btn-xs btn-primary" href="{{ route('companies.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Name : </strong>
        {{ $company->name }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Description : </strong>
        {{ $company->description }}
      </div>
    </div>
  </div>
  

@endsection