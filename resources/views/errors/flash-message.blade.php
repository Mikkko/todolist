@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <strong>{{ $error }}</strong>
            @endforeach
    </div>
@endif
