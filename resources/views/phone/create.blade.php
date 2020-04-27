@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

             {{-- error message  --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
            <div class="card">
                <div class="card-header">{{ __('Insert Phone number') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('phone.store') }}">
                        @csrf

                        <label for="contact text-center text-info">{{ __('Contact Name') }}</label>


                        <div class="form-group floating-label-form-group controls">
                           
                            <select name="contact_id" id="contact" class="form-control mt-2 mb-2">
                              @foreach ($contact as $cat)
                              
                            <option value="{{$cat->id}}">{{$cat->f_name}} {{ $cat->l_name }}</option>
                              @endforeach
                            </select>
                          </div>

                          <br>



                        <div class="form-group row">
                            <label for="c_address" class="col-md-4 col-form-label text-md-right">{{ __('phone number One ') }}</label>

                            <div class="col-md-6">
                                <input id="contact_number_1" type="text" class="form-control @error('contact_number_1') is-invalid @enderror" name="contact_number_1" value="{{ old('contact_number_1') }}" required autocomplete="contact_number_1" autofocus>

                                @error('contact_number_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       



                        <div class="form-group row">
                            <label for="p_address" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                            <div class="col-md-6">
                                <input id="contact_number_2" type="text" class="form-control" name="contact_number_2" autofocus>

                                
                            </div>
                        </div>


                        <div class="submit text-center">
                            <button class="btn btn-outline-primary" type="submit">Add Address</button>


                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
