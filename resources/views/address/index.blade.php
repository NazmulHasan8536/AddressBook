@extends('master')

@section('content')

    <div class="container">
        <div class="row">
            <a href="{{ route('address.create') }}" class="btn btn-success">Add Address</a>
        </div>
    </div>


    <div class="container mt-4">



    {{-- @foreach ($category as $cat)
        
    @endforeach --}}


    <table class="table table-striped">
      <thead>
        <tr>
          <th>Contact Name</th>
          <th>Contact Email</th>
          <th>Current Address</th>
          <th>Permanent Address</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($address as $cat)

        <tr>
            <td>{{$cat->f_name}} {{ $cat->l_name }}</td>
            <td>{{$cat->email}}</td>
            <td>{{$cat->c_address}}</td>
            <td>{{$cat->p_address}}</td>
            
          </tr>
            
        @endforeach

      </tbody>
    </table>


@endsection