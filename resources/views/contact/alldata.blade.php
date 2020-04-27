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



    <div class="row">
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
              <tr>
                @foreach ($contact as $row)
            <td>{{$row->id}}</td>
            <td>{{$row->contact_id}}</td> 
            <td>{{$row->f_name}}</td>  
            <td>{{$row->l_name}}</td>  
            <td>{{$row->email}}</td> 
    
              </tr>
    
   
   @endforeach
   
   
    </tr>
    </table>
 </div>










 <div class="row">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>contact one</th>
            <th>contact two</th>
         
            
          </tr>
          <tr>
            @foreach ($phone as $item)
            <td>{{$item->contact_number_1}}</td>
            <td>{{$item->contact_number_2}}</td>
            @endforeach

          </tr>


</table>
</div>











<div class="row">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>contact id</th>
            <th>current address</th>
            <th>permanent address</th>
         
            
          </tr>
          <tr>
            @foreach ($address as $new)
            <td>{{$new->contact_id}}</td>
            <td>{{$new->c_address}}</td>
            <td>{{$new->p_address}}</td>
            @endforeach

          </tr>





</tr>
</table>
</div>







  
</tbody>
</table>

@endsection