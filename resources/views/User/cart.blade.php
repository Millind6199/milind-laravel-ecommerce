<x-user_sidebar/>

<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-9">
        @foreach( $data as $cart)

        <div class="card w-100">
                <div class="row">

                    <div class="col-3">
                            <img src="{{$cart->product['product_image']}}">
                    </div>

                    <div class="col-9">

                        <div class="card-body">

                            <h5 class="card-title">{{$cart->product['product_name']}}</h5>

                            <p class="card-text">{{$cart->product['product_details']}}</p>

                            <a href="/buynow/{{$cart->product_id}}" class="btn btn-primary">Buy know</a>

                            <a href="/remove-cart/{{$cart->id}}" class="btn btn-danger">Remove</a>

                        </div>

                    </div>

                </div>

            </div>
            <br><br>
        @endforeach

    </div>

</div>
