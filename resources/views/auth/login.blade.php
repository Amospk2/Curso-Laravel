@extends('layouts.app')

@section('content')
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <!-- Icon -->
    <div class="fadeIn first">
    </div>

    <!-- Login Form -->

    <form method="POST" action="{{ route('login') }}">
        @csrf
      <input type="text" id="login" class="@error('email') is-invalid @enderror fadeIn second" name="email" placeholder="login">
      <br>
      @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror

      <input type="text" id="password" class="@error('password') is-invalid @enderror fadeIn third" name="password" placeholder="password">
      <br>
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="row">
        <div class="col-8">
              <div class="icheck-primary">
                  <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">
                      Lembre-se
                  </label>
              </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
          <input type="submit" class="fadeIn fourth" value="Log In">
          </div>
          <!-- /.col -->
        </div>
      </form>

    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
@endsection



    

