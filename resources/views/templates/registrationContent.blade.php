<div class="container mt-5">
    <h1 class="text-center">Registration</h1>
    <form action="{{route('register')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" value="{{old('email')}}" name="email" required autocomplete="email" autofocus>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-form-label">Confirm password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
