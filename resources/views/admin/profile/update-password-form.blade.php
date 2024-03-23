<div class="card card-info">
    <!-- Header -->
    <div class="card-header">
        <h5 class="card-title mb-0 text-primary">{{ __('Update Password') }}</h5>
    </div>
    <form method="post" action="{{ route('password.update') }}" class="form-horizontal">
        @csrf
        @method('put')
        <div class="card-body">                  
            <p class="mt-1 text-sm text-gray-600">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
            <!-- Current Password -->
            <div class="form-group row">
                <label for="update_password_current_password" class="col-sm-3 col-form-label">{{ __('Current Password') }}</label>
                <div class="col-sm-9">
                    <input id="update_password_current_password" name="current_password" type="password" class="form-control" 
                    required autocomplete="current-password" placeholder="Current Password">
                    @if ($errors->updatePassword->get('current_password'))
                        <ul class='text-danger'>
                            @foreach ($errors->updatePassword->get('current_password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div> 
            <!-- New Password -->               
            <div class="form-group row">
                <label for="update_password_password" class="col-sm-3 col-form-label">{{ __('New Password') }}</label>
                <div class="col-sm-9">
                    <input id="update_password_password" name="password" type="password" class="form-control" 
                    required autocomplete="new-password" placeholder="Password">
                    @if ($errors->updatePassword->get('password'))           
                        <ul class='text-danger'>
                            @foreach ($errors->updatePassword->get('password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <!-- Confirm Password -->
            <div class="form-group row">
                <label for="update_password_password_confirmation" class="col-sm-3 col-form-label">{{ __('Confirm Password') }}</label>
                <div class="col-sm-9">
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" 
                    required autocomplete="new-password" placeholder="Confirm Password">
                    @if ($errors->updatePassword->get('password'))           
                        <ul class='text-danger'>
                            @foreach ($errors->updatePassword->get('password_confirmation') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ __('Save') }} </button>
        </div>
    </form>
</div>
