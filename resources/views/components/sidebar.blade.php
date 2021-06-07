<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%">
    <h3 class="w3-bar-item">Menu</h3>

    <div class="w3-dropdown-hover">
        <button class="w3-button">
            <a href="/dashboard" style="color: black">Dashboard</a>

        </button>
        </div>


    <div class="w3-dropdown-hover">
        <button class="w3-button">Product Management
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addproduct" class="w3-bar-item w3-button"><b>Add Product</b></a>
            <a href="/viewproduct" class="w3-bar-item w3-button"><b>View Product</b></a>
        </div>
    </div>


    <div class="w3-dropdown-hover">
        <button class="w3-button">User Management
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="#" class="w3-bar-item w3-button"><b>Add User</b></a>
            <a href="#" class="w3-bar-item w3-button"><b>View User</b></a>
        </div>
    </div>

    <div class="w3-dropdown-hover">
        <button class="w3-button">Order Management
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="#" class="w3-bar-item w3-button"><b>Add Order</b></a>
            <a href="#" class="w3-bar-item w3-button"><b>View Order</b></a>
        </div>
    </div>

</div>

<!-- Page Content -->
<div style="margin-left:20%">

    <div class="w3-container w3-teal">
        <form action="{{route('search')}}" method="get">
        @csrf
        <input class="mt-3 rounded" type="text" name="search" placeholder="search">
        <input type="submit" class="btn btn-dark" value="Search">

        <div class="w3-dropdown-hover" style="float:right">
            <button class="w3-button">
                <b style="font-size:36px">
                    {{ucwords(Auth::guard('admin')->user()->name)}}</b><i class="fas fa-users-cog lg" style="font-size:36px"></i>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block">
                <a href="#" class="w3-bar-item w3-button"><b>Profile</b></a>
                <a href="/logout" class="w3-bar-item w3-button red"><b>Logout</b></a>
            </div>
        </div>
        </form>

    </div>



</div>
