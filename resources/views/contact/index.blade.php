@extends('master')
@section('content')
<div class="container">



  <div class="row">
    <div class="col-md-4">
      <a href="{{ route('address.create') }}" class="btn btn-success">Add Address</a>
    </div>
    <div class="col-md-4">
      <a href="{{ route('phone.create') }}" class="btn btn-primary">Add Phone Number</a>
    </div>
    <div class="col-md-4">
      <a href="{{ route('alldata') }}" class="btn btn-info">all Data</a>
    </div>
  </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>first Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th class="text-center">
        <a href="{{ route('contact.create') }}" class="btn btn-outline-primary">insert new Contact</a>
        </th>
        <th>last</th>
        <th>last</th>
        
      </tr>
    </thead>
    <tbody>
        <tbody>
          @foreach ( $contacts as $contact ) 
          <tr>
           <td>{{$contact->id}}</td>
          <td>{{$contact->f_name}}</td>
          <td>{{$contact->l_name}}</td>
          <td>{{$contact->email}}</td>
            <td>              
                <a href="{{URL::to('contact/edit/'.$contact->id)}}"  class="btn btn-outline-success" >Edit</a>
                <a href="{{URL::to('contact/delete/'.$contact->id)}}"  class="btn btn-outline-danger" id="delete" >Delete</a>

                <a href="{{URL::to('contact/view/'.$contact->id)}}"  class="btn btn-outline-primary" >view</a>
            </td>
            <td>
                <a href="{{ url('/address/') }}">Address List</a>
            </td>
            <td>
                <a href="{{ route('phone') }}">Phone List</a>
            </td>
          </tr>
          @endforeach 
        </tbody>
       </table>

</div>
    
    
@endsection