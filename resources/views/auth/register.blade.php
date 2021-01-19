
<style> 
.min-h-screen{
    background-image: url("images/istockphoto-1191641363-170667a_1349x1280.jpg");
    background-repeat: no-repeat;
  background-size: cover;
}
</style>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <!-- <img src="images/logoo_1_250x200.png" style="width:150px"> -->
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
           
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <!-- <div>
                <x-jet-label for="specialist" value="{{ __('specialist') }}" />
                <x-jet-input id="specialist" class="block mt-1 w-full" type="text" name="specialist" :value="old('specialist')" required autofocus autocomplete="specialist" />
            </div> <div>
                <x-jet-label for="description" value="{{ __('description') }}" />
                <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
            </div> -->
            <div>
                <x-jet-label for="address" value="{{ __('address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>
            <div>
                <x-jet-label for="phone" value="{{ __('phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>
            <div>
                <x-jet-label for="university" value="{{ __('university') }}" />
                <x-jet-input id="university" class="block mt-1 w-full" type="text" name="university" :value="old('university')" required autofocus autocomplete="university" />
            </div>
            <!-- <div>
                <x-jet-label for="gender" value="{{ __('gender') }}" />
                <x-jet-input id="gender" class="block mt-1 w-full" type="radio" name="gender" value="male" required autofocus autocomplete="gender" />
                <x-jet-input id="gender" class="block mt-1 w-full" type="radio" name="gender" value="female" required autofocus autocomplete="gender" />
            </div> -->
            <div class="form-group" style="margin-top: 13px;">
                            <label>Gender</label>
                            <label class="radio-inline m-l-15"><input type="radio" name="gender" value="male" checked>Male</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                           
                        </div>
                        <div class="form-group">
                                <label for="dob">DOB</label>
                                <input type="date" class="form-control" id="dob" name="dob" required style="margin-top: 13px;">
                                
                            </div>
                            <div class="form-group">
                            <label for="note">image</label>
                            <input type="file" class="form-control" id="profile_photo_path" name="profile_photo_path" required style="margin-top: 13px;">
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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
