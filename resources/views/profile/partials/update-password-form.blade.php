<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>
    </header>
    <br>
    <br>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div style="max-width: 400px">
            <x-input-label for="current_password" :value="__('Current Password')" class="labels" />
            <x-text-input id="current_password" name="current_password" type="password" class="form-control mt-1 block "
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        <br>

        <div style="max-width: 400px">
            <x-input-label for="password" :value="__('New Password')" class="labels" />
            <x-text-input id="password" name="password" type="password" class="form-control mt-1 block w-full"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>
        <br>

        <div style="max-width: 400px">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="labels" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="form-control mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
        <br>
        <br>
        <br>

        <div class="btn btn-primary py-1 px-5 flex items-center ">
            <x-primary-button
                style="background: none; border:none!important;
            color: black !important">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
