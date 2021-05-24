<x-header/>
<div class="container-fluid row">
    <div class="col-4">

    </div>
    <div class="col-4 m-5">

        <h1>Register</h1>
        {{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}
        <form action="/signup" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter User Name">
                <span>@error('name'){{$message}}@enderror</span>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
                <span>@error('email'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Abc@123">
                <span>@error('password'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password">
                <span>@error('confirm_password'){{$message}}@enderror</span>



            </div>
            <div class="mb-3">
                <input type="submit" name="signup" value="Register" class="btn btn-dark"><br><br>
                Already have an account?<a href="login">login</a>

            </div>
        </form>

    </div>

</div>
