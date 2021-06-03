<x-user_sidebar/>

<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-9">
        @foreach( $data as $order)

            <div class="card w-100">
                <div class="row">

                    <div class="col-3">
                        <img  style="width:300px;height:200px" src="{{$order->product['product_image']}}">
                    </div>

                    <div class="col-9">

                        <div class="card-body">

                            <h5 class="card-title">{{$order->product['product_name']}}</h5>

                            <p class="card-text">{{$order->product['product_details']}}</p>
                            <p class="card-text">{{$order->quantity}}</p>
                            Mobile No.:
                            <p class="card-text">{{$order->mobile_no}}</p>

                            Address:
                            <p class="card-text">{{$order->address}}</p>


{{--                            <a href="/buynow/{{$cart->product_id}}" class="btn btn-primary">Buy know</a>--}}

                            <a href="/remove-order/{{$order->id}}" class="btn btn-danger">Remove</a>

                        </div>

                    </div>

                </div>

            </div>
            <br><br>
        @endforeach

    </div>

</div>
