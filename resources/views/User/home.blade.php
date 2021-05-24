<x-user_sidebar/>


<div class="row" style="margin-left:360px;">
    @foreach($data as $list)
        <div class="col mt-5">
            <div class="card rounded" style="width:300px;">
                <img class="card-img-top rounded" src="{{$list->product_image}}" style="height:300px">
                <div class="card-body">
                    <h5 class="card-title">{{$list->product_name}}</h5>
                    <p class="card-text">{{$list->product_details}}</p>
                    <p class="card-text">Rs.{{$list->product_amount}}</p>

                    <a href="/buynow/{{$list->id}}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
