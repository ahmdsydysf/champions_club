<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('main.Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("main.Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('main.Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                :value="old('name', Auth::user()->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div class="mt-2">
            <x-input-label for="email" class="mt-2" :value="__('main.Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                :value="old('email', Auth::user()->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !
            Auth::user()->hasVerifiedEmail())
            <div class="mt-2">
                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>
        <div>
            <x-input-label for="mobile" class="mt-2" :value="__('main.mobile')" />
            <x-text-input id="mobile" name="mobile" type="text" minlength="11" class="mt-1 block w-full"
                :value="old('mobile', Auth::user()->mobile)" required autofocus autocomplete="mobile" />
            <x-input-error class="mt-2" :messages="$errors->get('mobile')" />
        </div>
        <div>
            <x-input-label for="floatingTextarea2" class="mt-2" :value="__('main.Address')" />
            <div class="form-floating">
                <textarea name="address" class="form-control" placeholder="Address" id="floatingTextarea2"
                    style="height: 100px">{{old('address', Auth::user()->address)}}</textarea>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('main.Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400">{{ __('main.Saved') }}</p>
            @endif
        </div>
    </form>
</section>
