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
                <div class="card-header">{{ __('Insert Address') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('address.store') }}">
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
                            <label for="c_address" class="col-md-4 col-form-label text-md-right">{{ __('Current Address') }}</label>

                            <div class="col-md-6">
                                <input id="current_address" type="text" class="form-control @error('c_address') is-invalid @enderror" name="c_address" value="{{ old('c_address') }}" required autocomplete="c_address" autofocus>

                                @error('current_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       



                        <div class="form-group row">
                            <label for="p_address" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                            <div class="col-md-6">
                                <input id="p_address" type="text" class="form-control @error('p_address') is-invalid @enderror" name="p_address" value="{{ old('p_address') }}" required autocomplete="p_address" autofocus>

                                @error('p_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
