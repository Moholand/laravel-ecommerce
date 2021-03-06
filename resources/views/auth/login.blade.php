<x-guest-layout>

  <!--main area-->
  <main id="main" class="main-site left-sidebar">

    <div class="container">

      <div class="wrap-breadcrumb">
        <ul>
          <li class="item-link"><span>ورود</span></li>
          <li class="item-link"><a href="{{ route('home') }}" class="link">خانه</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
          <div class=" main-content-area">
            <div class="wrap-login-item ">
              <div class="login-form form-item form-stl">
                
                <x-jet-validation-errors class="mb-4" />
                
                <form name="frm-login" method="POST" action="{{ route('login') }}">
                  @csrf
                  <fieldset class="wrap-title">
                    <h2 class="form-title">ورود به حساب کاربری</h2>
                  </fieldset>
                  <fieldset class="wrap-input">
                    <label for="frm-login-uname">:ایمیل</label>
                    <input type="email" id="frm-login-uname" name="email" placeholder="لطفا ایمیل خود را وارد نمایید" :value="old('email')" required autofocus>
                  </fieldset>
                  <fieldset class="wrap-input">
                    <label for="frm-login-pass">:رمز ورود</label>
                    <input type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">
                  </fieldset>

                  <fieldset class="wrap-input">
                    <label class="remember-field">
                      <input class="frm-input " name="remember" id="rememberme" value="forever"
                        type="checkbox"><span>مرا به خاطر بسپار</span>
                    </label>
                    <a class="link-function left-position" href="{{ route('password.request') }}" title="فراموشی رمز عبور؟">
                      فراموشی رمز عبور؟
                    </a>
                  </fieldset>
                  <input type="submit" class="btn btn-submit" value="ورود" name="submit">
                </form>
              </div>
            </div>
          </div>
          <!--end main products area-->
        </div>
      </div>
      <!--end row-->

    </div>
    <!--end container-->

  </main>
  <!--main area-->

</x-guest-layout>