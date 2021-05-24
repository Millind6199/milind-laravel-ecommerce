<x-header/>


<div class="container-fluid row">
    <div class="col-4">

    </div>

    <div class="col-4 m-5">
        <h1>Login</h1>
        <form action="admins/login" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
                <span>@error('email'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password"  placeholder="Abc@123">
                <span>@error('password'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <input type="submit" name="login" value="Login" class="btn btn-dark"><br><br>
                {{--                New User? <a href="signin">Register</a>--}}
            </div>
        </form>
    </div>


</div>
