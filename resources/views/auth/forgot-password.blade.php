<x-guest-layout>
<div class="container-login text-center">
          <div id="carga" style="display:block;" class="text-center ">
          <div class="spinner-grow" role="status" style="width: 30rem; height: 30rem;background-color: transparent;" >
            <img class="img-fluid" src="{{asset('vendor/img_ini/marca.png')}}" />
          </div>
          </div>
          <div id="pintar" class="wrap-login" style="display:none;">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
            <form class="login-form validate-form" id="formLogin" method="POST" action="{{ route('password.email') }}">
            @csrf
                <span class="login-form-title"><img style="width: 7rem; height: 7rem;" class="" src="{{asset('vendor/img_ini/favicon.ico')}}" /></span>
                <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
          <x-jet-validation-errors class="mb-4" />
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="email" id="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                    <span class="focus-efecto"></span>
                </div>
             
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">Password Reset</button>
                    </div>
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