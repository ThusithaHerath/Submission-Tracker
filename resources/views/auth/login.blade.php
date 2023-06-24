 {{-- @extends('layouts.app')
 @section('content')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">{{ __('Login') }}</div>

                     <div class="card-body">
                         <form method="POST" action="{{ route('login') }}">
                             @csrf

                             <div class="row mb-3">
                                 <label for="email"
                                     class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                 <div class="col-md-6">
                                     <input id="email" type="email"
                                         class="form-control @error('email') is-invalid @enderror" name="email"
                                         value="{{ old('email') }}" required autocomplete="email" autofocus>

                                     @error('email')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="row mb-3">
                                 <label for="password"
                                     class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                 <div class="col-md-6">
                                     <input id="password" type="password"
                                         class="form-control @error('password') is-invalid @enderror" name="password"
                                         required autocomplete="current-password">

                                     @error('password')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="row mb-3">
                                 <div class="col-md-6 offset-md-4">
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                             {{ old('remember') ? 'checked' : '' }}>

                                         <label class="form-check-label" for="remember">
                                             {{ __('Remember Me') }}
                                         </label>
                                     </div>
                                 </div>
                             </div>

                             <div class="row mb-0">
                                 <div class="col-md-8 offset-md-4">
                                     <button type="submit" class="btn btn-primary">
                                         {{ __('Login') }}
                                     </button>

                                     @if (Route::has('password.request'))
                                         <a class="btn btn-link" href="{{ route('password.request') }}">
                                             {{ __('Forgot Your Password?') }}
                                         </a>
                                     @endif
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection --}}


 @extends('layouts.app')
 @section('content')
     <section style="margin-top: 10%">
         <div class="main-form-container ">
             <div id="form_section" class="form-container w-50">
                 <div class="login-form form-wraper ">

                     <form method="POST" action="{{ route('login') }}">
                         @csrf

                         <div>
                             <div class="form-title">
                                 <h2 class="fw-bold">Login</h2>
                             </div>
                             <div class="input-group">
                                 <div class="boxLogin mb-3">
                                     <span>
                                         <input placeholder="Email" class="myInput" type="email"
                                             value="{{ old('email') }}" required autocomplete="email" autofocus
                                             name="email" />
                                     </span>
                                     @error('email')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                             </div>
                             <div class="input-group m-0">
                                 <div class="boxLogin">
                                     <span>
                                         <input placeholder="Password" class="myInput" type="text" required
                                             autocomplete="current-password" name="password" />
                                     </span>

                                 </div>
                                 @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>

                             @if (Route::has('password.request'))
                                 <div class="forget-password mt-3">
                                     <a class="btn text-white" href="{{ route('password.request') }}">Forgot Password?</a>
                                 </div>
                             @endif


                             <div class="action-button">
                                 <button type="submit">Login</button>
                             </div>
                         </div>

                     </form>
                 </div>
                 <div class="signUp-form form-wraper">
                     <div>
                         <div class="form-title">
                             <h2 class="fw-bold">Sign Up</h2>
                         </div>

                         <div class="row">
                             <div class="col-6">
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="First Name" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="Address Line 1" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="City" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="Zip" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="Email" class="myInput" type="email" />
                                         </span>
                                     </div>
                                 </div>

                             </div>
                             <div class="col-6">
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="Last Name" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="Address Line 2" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="State" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="Phone No." class="myInput" type="text" maxlength="16" />
                                         </span>
                                     </div>
                                 </div>
                                 <div class="input-group">
                                     <div class="boxLogin">
                                         <span>
                                             <input placeholder="Password" class="myInput" type="text" />
                                         </span>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>



                     <div class="action-button">
                         <button>Sign Up</button>
                     </div>
                 </div>
             </div>
         </div>
         <div id="multiple-btn" class="bg-btn-container">
             <div class="action-button">
                 <button>Login</button>
             </div>
             <div class="action-button"style="margin-right:25%!important">
                 <button>Sign Up</button>
             </div>
         </div>

         </div>
     </section>
 @endsection
