    <header>
        <h2 class="h5 font-weight-bold text-dark">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')
<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" class="form-control rounded" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

     <div class="col-lg">
        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control rounded" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-muted">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="btn btn-link p-0">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
        

        

        <div class="form-group text-center ">
            <button type="submit" class="btn btn-primary col-lg-5">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="ml-3 text-muted"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
