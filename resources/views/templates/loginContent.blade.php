<div class="container mt-5">
    <form action="{{route('login')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" name="password" type="Password" class="form-control ">
        </div>
        <br>
        <button type="submit" class="btn btn-auth">Login</button>
    </form>
</div>
