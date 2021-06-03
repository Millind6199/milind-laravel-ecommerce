<x-user_sidebar/>

<div class="row mt-5">

    <div class="col-3"></div>

    <div class="col-4">
        <img src="{{$data->product_image}}" style="width:500px;height:500px;">
    </div>

    <div class="col-4">
        <h2>{{$data->product_name}}</h2><br>
        <h4>{{$data->product_details}}</h4><br>
        <h4>Rs.{{$data->product_amount}}</h4>

        <form method="post" action="/place-order/{{$data->id}}">
            @csrf
            <input type="number" name="product_quantity" value="1" /><br><br>
            <input type="text" name="mobile_no" placeholder="Mobile No"/><br>
            <span>@error('mobile_no'){{$message}}@enderror</span><br><br>


            <textarea name="address" placeholder="Enter Your Address" style="width:300px;height:100px;"></textarea><br>
            <span>@error('address'){{$message}}@enderror</span>

            <br><br>

            <h2>Paymnet method</h2>
            <input type="radio" checked>  <b style="font-size:20px">COD</b><br><br><br>
            <a href="/add-to-cart/{{$data->id}}" class="btn btn-primary">Add Cart</a>
            <input type="submit" name="submit" class="btn btn-primary" value="Buy Now">

        </form>



    </div>
</div>

