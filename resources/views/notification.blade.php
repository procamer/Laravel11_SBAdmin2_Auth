@if(session('success'))
    <div class="alert alert-success alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">x</button>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">x</button>
        {{session('error')}}
    </div>
@endif

@if(session('status'))
    <div class="alert alert-info alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">x</button>
        {{session('status')}}
    </div>
@endif
