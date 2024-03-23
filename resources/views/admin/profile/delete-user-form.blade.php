<div class="card card-info">
    <div class="card-header">
        <h5 class="card-title mb-0 text-primary"> {{ __('Delete Account') }}</h5>    
    </div>
    <div class="card-body">
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </div>
    <div class="card-footer">
        <button type="submit" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">{{ __('Delete Account') }}</button>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')
                                
                <div class="modal-body">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>
                    <div class="col-sm-12 ">
                        <input id="password" name="password" type="password" class="form-control" 
                        required autocomplete="new-password" placeholder="Password">
                        @if ($errors->updatePassword->get('password'))           
                            <ul class='text-danger'>
                                @foreach ($errors->userDeletion->get('password') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>    

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button class="btn btn-danger" type="submit">{{ __('Delete Account') }}</button>                        
                </div>
            </form>    
        </div>
    </div> 
</div>
