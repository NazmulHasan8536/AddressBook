@extends('master')

@section('content')

    


    <div class="container mt-4">



    {{-- @foreach ($category as $cat)
        
    @endforeach --}}


    <table class="table table-striped">
      <thead>
        <tr>
          <th>Contact Name</th>
          <th>Contact Email</th>
          <th>Phone Number</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($phone as $phone)

        <tr>
            <td>{{$phone->f_name}} {{ $phone->l_name }}</td>
            <td>{{$phone->contact_number_1}}</td>
            <td>{{$phone->contact_number_2}}</td>
            
          </tr>
            
        @endforeach

      </tbody>
    </table>


@endsection