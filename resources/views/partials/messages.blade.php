@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('session'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
