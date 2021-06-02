<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%">
    <h3 class="w3-bar-item">Menu</h3>


    <div class="w3-dropdown-hover ">
        <a href=""> <button class="w3-button"> Home </button> </a>
        <a href=""> <button class="w3-button"> Cart </button> </a>
        <a href=""> <button class="w3-button"> My Orders </button> </a>
        <a href=""> <button class="w3-button"> About Us</button> </a>
        <a href=""> <button class="w3-button"> Contact Us </button> </a>


    </div>




</div>

<!-- Page Content -->
<div style="margin-left:20%">

    <div class="w3-container w3-teal">
        <a href="/dashboard" style="color:white;font-size:30px;"><b>Dashboard</b></a>
        <div class="w3-dropdown-hover" style="float:right">
            <button class="w3-button">
                <b style="font-size:20px">
                    {{ucwords(Auth::guard('admin')->user()->name)}}</b><i class="fas fa-users-cog lg" style="font-size:36px"></i>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block">
                <a href="#" class="w3-bar-item w3-button"><b>Profile</b></a>
                <a href="/logout" class="w3-bar-item w3-button red"><b>Logout</b></a>
            </div>
        </div>
    </div>



</div>
