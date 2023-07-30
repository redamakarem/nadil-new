<div>

    <div class="rounded-[64px] border-2 bg-[#EFEFEF] my-12 px-16 py-12">
        <div class="form-group">
            @if ($errors->any())
                <div class="text-red-700">
                    <p class="bg-red-100 text-center"><strong>{{__('nadil.general.validation_error_header')}}</strong></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-700">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('status'))
                <div
                    class="bg-green-600 px-8 py-12 text-white font-lato uppercase text-md tracking-[6px] rounded-[19px]"">
                    {{ Session::get('status') }}
                </div>
            @endif
        </div>
        <form wire:submit.prevent="login" class="space-y-8">
            <div class="w-full">
                <h2
                    class="ltr:font-lato rtl:font-ahlan text-center font-bold uppercase text-lg ltr:tracking-[4px] rtl:tracking-normal">
                    {{__('nadil.auth.login')}}</h2>
            </div>
            <div class="w-full">
                <input type="text" placeholder="{{ __('nadil.auth.email') }}" wire:model="email"
                    class="flex items-center w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold rtl:placeholder:font-normal text-[19px] ltr:tracking-[4px] rtl:tracking-normal border-[#707070] border-2 p-4 rounded-[19px]">
            </div>
            <div class="w-full">
                <div class="flex bg-white border-[#707070] border-2 p-2 rounded-[19px] space-x-8">
                    <input type={{ $showPassword ? 'text' : 'password' }} placeholder="{{ __('nadil.auth.password') }}"
                        wire:model="password"
                        class="flex items-center border-none focus:border-none focus:outline-none w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold text-[19px] rtl:placeholder:font-normal ltr:tracking-[4px] rtl:tracking-normal rounded-[19px]">
                    <button type="button" wire:click="togglePasswordVisibility"><i
                            class="fa fa-{{ $showPassword ? 'eye' : 'eye-slash' }}"></i></button>
                </div>
                <div class="pt-4 flex justify-between p-8 underline">
                    <a class="ltr:font-lato rtl:font-ahlan text-[19px] ltr:tracking-[4px] rtl:tracking-normal uppercase "
                        href="{{ route('site.user-register') }}">{{__('nadil.user_registration.title')}}</a>
                    <a class="ltr:font-lato rtl:font-ahlan text-[19px] ltr:tracking-[4px] rtl:tracking-normal uppercase "
                        href="{{ route('password.email') }}">{{__('nadil.auth.forgot_password')}}</a>
                    
                </div>
            </div>
            {{-- <div class="w-full flex justify-between">
                    <a href="{{route('password.request')}}">{{__('Forgot Password')}}</a>
                    <a href="{{route('site.user-register')}}">{{__('Register')}}</a>
                </div> --}}
            <div class="flex flex-col items-center justify-center">
                <p class="text-center mb-4">{{__('nadil.auth.login_with')}}</p>
                <div class="flex justify-center space-x-8 rtl:space-x-reverse">
                    <a href="{{ route('site.auth.google') }}"><i class="fa-brands fa-google text-3xl"></i></a>
                    <a href="{{ route('site.auth.facebook') }}"><i class="fa-brands fa-facebook text-3xl"></i></a>
                </div>
            </div>
            <div class="flex w-full justify-end">
                <button type="submit"
                    class="ltr:font-lato rtl:font-ahlan uppercase px-12 py-4 bg-white shadow-md rounded-[12px] ltr:tracking-[4px] rtl:tracking-normal ltr:font-bold rtl:font-normal">{{ __('nadil.auth.login') }}
                </button>
            </div>
        </form>
    </div>

</div>
