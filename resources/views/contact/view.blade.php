@extends('master')


@section('content')


    <div class="container">
        <h2 class="text-primary text-center">Contact details</h2>
        
        <ol>
            <li>{{ $contacts->id }}</li>
            <li>{{ $contacts->f_name }}</li>
            <li>{{ $contacts->l_name }}</li>
            <li>{{ $contacts->email }}</li>
        </ol>
    
    </div>    
@endsection