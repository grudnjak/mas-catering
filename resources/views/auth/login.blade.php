@extends('layouts.app')

@section('content')
<div class="page-content  custom-img-background page-title "  style="background-image: url('/storage/catering-bg.jpeg');">

        <div class="container" >
                <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-4 mx-auto"></div>
                  <div class="col-sm-8 col-md-7 col-lg-5 mx-auto" style="background-color:white ;border: 1px solid rgba(0, 0, 0, 0.125);
                  border-radius: 0.55rem;padding: 15px">
                    <div class="card card-signin my-5" >
                      <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
            
                          <div class="form-label-group">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                            <label for="inputEmail">Email address</label>
                          </div>
            
                          <div class="form-label-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <label for="inputPassword">Password</label>
                          </div>
            
                          <div class="custom-control custom-checkbox mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                          </div>
                          <button class="btn btn-outline-dark btn-block text-uppercase" type="submit">Sign in</button>
                     
                              </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" >
                        <div class="col-sm-2 col-md-2 col-lg-4 mx-auto page-title"></div>

                </div>
              </div>
</div>


@endsection
