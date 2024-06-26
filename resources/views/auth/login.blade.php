<x-guest-layout>
    <div class="relative isolate flex flex-col gap-2 lg:flex-row">
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <a href="javascript:void(0);" class="flex justify-start items-center pb-4">
                    <x-application-logo />
                </a>
                <h1 class="mb-4 text-xl font-semibold text-gray-700">Se connecter</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Input[ype="email"] -->
                    <div class="mt-4">
                        <x-input-label :value="__('E-mail')"/>
                        <x-text-input type="email" id="email" name="email" value="{{ old('email') }}" class="block w-full" required autofocus/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- Input[ype="password"] -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Mot de passe')"/>
                        <x-text-input type="password" id="password" name="password" class="block w-full"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox"
                                   name="remember"
                                   class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                            <span class="ml-2">{{ __('Se souvenir de moi') }}</span>
                        </label>
                    </div>
                    <div class="mt-4">
                        <x-primary-button class="block w-full">
                            {{ __('Connexion') }}
                        </x-primary-button>
                    </div>
                </form>
                <hr class="my-4"/>
                @if (Route::has('password.request'))
                    <p class="mt-4">
                        <a class="text-sm font-medium text-primary-600 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                        <a class="text-sm font-light text-primary-600 hover:underline" href="{{ route('register') }}">
                            <p class="block w-full">{{ __('Creer un compte') }}</p>
                        </a>
                    </p>
                @endif
            </div>
        </div>
        <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-2/4 lg:shrink-0">
            <img aria-hidden="true" class="absolute inset-0 h-full w-full rounded-2xl object-cover" src="{{ asset('assets/images/bg.jpg') }}" alt="Office"/>
        </div>
    </div>
</x-guest-layout>
