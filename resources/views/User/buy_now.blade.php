<x-user_sidebar/>

<div class="row mt-5">

    <div class="col-3"></div>

    <div class="col-4">
        <img src="{{$data->product_image}}" style="width:500px;height:500px;">
    </div>

    <div class="col-4">
        <h2>{{$data->product_name}}</h2><br>
        <h4>{{$data->product_details}}</h4><br>

        <div class="input-group m-4  ">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                        <i class="fas fa-minus-square"></i>
                                        </button>
                                    </span>
            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
            <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <i class="fas fa-plus-square"></i>
                                        </button>
                                    </span>
        </div><br>
        <h4>Rs.{{$data->product_amount}}</h4>
        <h2>Paymnet method</h2>
        <input type="radio" checked>  <b style="font-size:20px">COD</b><br><br><br>
        <a href="#" class="btn btn-primary">Add Cart</a>
        <a href="#" class="btn btn-primary">Buy Now</a>

    </div>
</div>

<script>
    $(document).ready(function(){
        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);

            // Increment

        });
        $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>
