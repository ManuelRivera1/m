<x-guest-layout>
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
<div class="container-login text-center">
          <div id="carga" style="display:block;" class="text-center ">
          <div class="spinner-grow" role="status" style="width: 30rem; height: 30rem;background-color: transparent;" >
            <img class="img-fluid" src="{{asset('vendor/img_ini/marca.png')}}" />
          </div>
          </div>
          <div id="pintar" class="wrap-login" style="display:none;">
          <x-jet-validation-errors class="mb-4" />
            <form class="login-form validate-form" id="formLogin" method="POST" action="{{ route('login') }}">
            @csrf
                <span class="login-form-title"><img style="width: 11rem; height: 11rem;" class="rounded-circle" src="{{asset('vendor/img_ini/favicon.ico')}}" /></span>

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                <!-- <x-jet-input class="input100" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> -->
                    <input class="input100" type="email" id="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                    <span class="focus-efecto"></span>
                </div>

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">LOGIN</button>
                    </div>
                        @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('No recuerdo mi contraseña') }}
                    </a>
                @endif
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
<script>
    //simular cargar
    var myVar =""
   function load() {
       myVar = setTimeout(showPage, 3000);

   }
function showPage() {
   $('div#carga').css("display", "none");
   $('div#pintar').css("display", "block");
}

</script>
