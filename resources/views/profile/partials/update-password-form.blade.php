<section>
    <header>
        <h2 class="h5 text-dark">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')
<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label for="update_password_current_password">{{ __('Current Password') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-control rounded" autocomplete="current-password">
            @if ($errors->updatePassword->has('current_password'))
                <small class="text-danger">{{ $errors->updatePassword->first('current_password') }}</small>
            @endif
        </div>
    </div>

    <div class="col-lg">
        <div class="form-group">
            <label for="update_password_password">{{ __('New Password') }}</label>
            <input id="update_password_password" name="password" type="password" class="form-control rounded" autocomplete="new-password">
            @if ($errors->updatePassword->has('password'))
                <small class="text-danger">{{ $errors->updatePassword->first('password') }}</small>
            @endif
        </div>
    </div>

    <div class="col-lg">
        <div class="form-group">
            <label for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control rounded" autocomplete="new-password">
            @if ($errors->updatePassword->has('password_confirmation'))
                <small class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</small>
            @endif
        </div>
    </div>
</div>
       

        

        

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary col-lg-4">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
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
</section>
