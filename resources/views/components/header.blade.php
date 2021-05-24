<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>
<nav class="change navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="\">TODO App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2
            mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                @if(Auth::check())

                    <li class="nav-item">
                        <a class="nav-link" href="#"  data-target="#myModal"
                           data-toggle="modal" data-backdrop="false" style="color:white"> Profile</a>
                        <div class="container">
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 style="margin-left:130px;"><b>My Profile</b></h2>
                                            <button type="button" style="margin-left:70px;" class="close"
                                                    data-dismiss="modal">
                                                &times;</button>
                                        </div>
                                        <div class="container mt-5 d-flex">
                                            <div class="card p-3">
                                                <div class="d-flex">
                                                    <div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155"> </div>
                                                    <div class="ml-3 w-100" style="margin-left: 10px;">
                                                        <h4 class="mb-0 mt-0">{{Auth::user()->name}}</h4>
                                                        <br>
                                                        <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                                                            <div class="d-flex flex-column"> <span
                                                                    class="articles">Todo</span> <span
                                                                    class="number1">{{Session::get('todo')}}</span> </div>
                                                            <div class="d-flex flex-column"> <span
                                                                    class="followers">In Progress</span> <span
                                                                    class="number2">{{Session::get('In Progress')}}</span>
                                                            </div>
                                                            <div class="d-flex flex-column"> <span
                                                                    class="rating">Completed</span> <span
                                                                    class="number3">{{Session::get('Completed')}}</span>
                                                            </div>
                                                        </div>
                                                        <div style="margin-left:150px; margin-top:5px;"><a
                                                                href="/logout" class="btn
                                                         btn-dark">Logout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                @else

                    <li>
                        <a href="/" class="btn btn-primary">Login</a>
                        <a href="users/register" class="btn btn-warning ">Signup</a>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</nav>
<br>

<style>
    .card {
        width: 400px;
        border: none;
        border-radius: 10px;
        background-color: #fff
    }
    .stats {
        background: #f2f5f8 !important;
        color: #000 !important
    }
    .articles {
        font-size: 10px;
        color: #a1aab9
    }
    .number1 {
        font-weight: 500
    }
    .followers {
        font-size: 10px;
        color: #a1aab9
    }
    .number2 {
        font-weight: 500
    }
    .rating {
        font-size: 10px;
        color: #a1aab9
    }
    .number3 {
        font-weight: 500
    }
</style>
