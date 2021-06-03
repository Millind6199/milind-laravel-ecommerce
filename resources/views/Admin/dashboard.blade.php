<x-sidebar/>

<p></p>
<html>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-3">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Total Products</div>
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <h1 class="card-text">{{count($data['data'])}}</h1>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Total Orders</div>
            <div class="card-body">
                <h5 class="card-title">Orders</h5>
                <h1 class="card-text">{{count($data['orders'])}}</h1>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Total Users</div>
            <div class="card-body">
                <h5 class="card-title">{{count($data['user'])}}</h5>
                <h4 class="card-text">Active :- 000</h4>
                <h4 class="card-text">in-Active:- 000 </h4>

            </div>
        </div>
    </div>
</div>


</body>
</html>
