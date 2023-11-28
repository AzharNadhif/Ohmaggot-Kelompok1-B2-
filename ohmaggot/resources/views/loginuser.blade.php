<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{asset('css/loginuser.css')}}" />
    <link rel="Website Icon" href="images/icon/logomaggot.png" type="png">
  </head>
  <body>
    {{-- {{ auth()->user() }} --}}
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="{{route('loginuser')}}" autocomplete="off" class="sign-in-form" method="POST">
              @csrf
              <div class="logo">
                <img src="images/icon/logomaggot.png" alt="easyclass" />
                <h4>ohmaggot!</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="email" id="email" name="email" minlength="4" class="input-field" autocomplete="off" required />
                  @error('email')
                        <small>{{ $message }}</small>
                  @enderror
                  <label for="email" >Email</label>
                </div>

                <div class="input-wrap">
                  <input type="password" minlength="4" class="input-field" id="password" name="password" autocomplete="off" required />
                  <label for="password" class="form-label">Password</label>
                </div>
                <button type="submit" name="submit" class="sign-btn">Log In</button>

                {{-- <input type="submit" value="Sign In" class="sign-btn" /> --}}

                {{-- <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p> --}}
              </div>
            </form>

            {{-- SIGN UP --}}
            <form action="{{route('signup')}}" autocomplete="off" class="sign-up-form" method="POST">
              @csrf
              <div class="logo">
                <img src="/images/icon/logomaggot.png" alt="easyclass" />
                <h4>ohmaggot!</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="username"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  @error('username')
                        <small>{{ $message }}</small>
                  @enderror
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input 
                  type="email"
                  name="email"
                  class="input-field"
                    autocomplete="off"
                    required
                  />
                  @error('email')
                    <small>{{ $message }}</small>
                  @enderror
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  @error('password')
                        <small>{{ $message }}</small>
                  @enderror
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" name="submit" class="sign-btn" />

                {{-- <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p> --}}
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="images/user/sign1.png" class="image img-1 show" alt="" />
              <img src="images/user/sign2.png" class="image img-2" alt="" />
              <img src="images/user/sign3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Maggot</h2>
                  <h2>Solusi Pintar</h2>
                  <h2>Sejuta Manfaat</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>