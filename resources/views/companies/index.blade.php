@extends('companies.master')



@section('content')
<div class="row">
    <div class="col-lg-12">
      <h3>CRUD - Create Read Update Delete</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('companies.create') }}">Create New Company</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Description</th>
      <th width="300px">Actions</th>
    </tr>

    @foreach ($companies as $company)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $company->name }}</td>
        <td>{{ $company->description }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('companies.show', $company->id) }}">Show</a>
          <a class="btn btn-xs btn-primary" href="{{ route('companies.edit', $company->id) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['companies.destroy', $company->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $companies->links() !!}
@endsection