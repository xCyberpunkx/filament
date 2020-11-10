<form wire:submit.prevent="login" class="space-y-4">
    <x-filament::input-group-stacked name="email" :label="__('E-Mail Address')" required>
        <x-filament::input type="email" name="email" wire:model.defer="email" id="email" required autocomplete="email" autofocus />
        @if (Route::has('filament.register'))
            <x-slot name="hint">
                <a href="{{ route('filament.register') }}" class="text-current hover:text-blue">
                    {{ __('filament::auth.register') }}
                </a>
            </x-slot>
        @endif
    </x-filament::input-group-stacked>

    <x-filament::input-group-stacked name="password" :label="__('Password')" required>   
        <x-slot name="hint">
            <a href="{{ route('filament.password.forgot') }}" class="text-current hover:text-blue">
                {{ __('Forgot Your Password?') }}
            </a>
        </x-slot>
        <x-filament::input type="password" name="password" wire:model.defer="password" id="password" required autocomplete="current-password" />
    </x-filament::input-group-stacked>

    <x-filament::checkbox name="remember" wire:model.defer="remember">
        {{ __('Remember Me') }}
    </x-filament::checkbox>

    <x-filament::button type="submit" class="btn-primary w-full" wire:loading.attr="disabled">
        <x-filament::loader class="w-6 h-6 absolute left-0 ml-2 pointer-events-none" wire:loading />
        {{ __('Login') }}
    </x-filament::button>

    <x-filament::message />
</form>