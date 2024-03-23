<div class="card card-info">
    <div class="card-header">
        <h5 class="card-title mb-0 text-primary"> {{ __('Profile Information') }}</h5>
    </div>

    <form method="post" action="{{ route('profile.update') }}" class="form-horizontal">
        @csrf
        @method('patch')
        <div class="card-body">
            <p class="mt-1 text-sm text-gray-600">
                {{ __("Update your account's profile information and email address.") }}
            </p>
            <!-- Name -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">{{__('Name')}}</label>
                <div class="col-sm-10">
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" 
                    required autocomplete="name" placeholder="Email">
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror    
                </div>
            </div>
            <!-- E-mail -->
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                <div class="col-sm-10">
                    <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" 
                    required autocomplete="username" placeholder="Password">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror    
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </form>
</div>
