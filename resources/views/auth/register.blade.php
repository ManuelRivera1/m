<x-guest-layout>
<div class="container-login text-center">
          <div id="carga" style="display:block;" class="text-center ">
          <div class="spinner-grow" role="status" style="width: 30rem; height: 30rem;background-color: transparent;" >
            <img class="img-fluid" src="{{asset('vendor/img_ini/marca.png')}}" />
          </div>
          </div>
          <div id="pintar" class="wrap-login" style="display:none;">
          <x-jet-validation-errors class="mb-4" />
            <form class="login-form validate-form" id="formLogin" method="POST" action="{{ route('register') }}">
            @csrf
                <span class="login-form-title"><img style="width: 7rem; height: 7rem;" class="" src="{{asset('vendor/img_ini/favicon.ico')}}" /></span>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="name" name="name" :value="old('name')" required autofocus placeholder="name">
                    <span class="focus-efecto"></span>
                </div>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="email" id="email" name="email" :value="old('email')" placeholder="email" required>
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                    <span class="focus-efecto"></span>
                </div>
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    <span class="focus-efecto"></span>
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">REGISTER</button>
                    </div>
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
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