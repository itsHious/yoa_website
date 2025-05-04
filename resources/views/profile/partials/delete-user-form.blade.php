<section class="mt-4">
    <header>
        <h2 class="h5 text-dark">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-2 text-dark">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button 
        type="button" 
        class="btn btn-danger mt-3" 
        data-toggle="modal" 
        data-target="#confirmUserDeletionModal"
    >
        {{ __('Delete Account') }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" role="dialog" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmUserDeletionModalLabel">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="form-group">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                class="form-control" 
                                placeholder="{{ __('Password') }}"
                            />
                            @if ($errors->userDeletion->has('password'))
                                <small class="text-danger">
                                    {{ $errors->userDeletion->first('password') }}
                                </small>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            {{ __('Cancel') }}
                        </button>
                        <button type="submit" class="btn btn-danger">
                            {{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
