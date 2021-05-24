<x-sidebar/>
<title>Add Product</title>
<div class='row'>
    <div class='col-4'></div>
    <div class='col-4 mt-5'>
        @if($setedit != 1)
            <form method="post" action="/addproduct1" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <select name="category">
                        <option value=”0”>Select Product Category</option>
                        @foreach($data as $category)
                            <option  value={{$category->id}}>{{$category->cat_name}}</option> -->
                        @endforeach

                    </select>
                </div>


                <div class="mb-3">
                    <label for="product_name" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Product Name"  name="product_name" id="title">
                    <span>@error('product_name'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="product_details" class="form-label"></label>
                    <textarea name="product_details" class="form-control" placeholder="Product Datails" id="overview" rows="4"></textarea>
                    <span>@error('product_details'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="product_image" class="form-label"></label>
                    <input type="file" class="form-control" placeholder="Upload An image"  name="product_image" id="image">
                    <span>@error('product_image'){{$message}}@enderror</span>
                </div>

                <div class="mb-3">
                    <label for="release_year" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Product Amount" name="product_amount" id="release_year">
                    <span>@error('product_amount'){{$message}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>



                <!-- Update  -->
                @else
                    <form method="post" action="admins/updateproduct/{{$product->id}}" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3">
                            <label for="product_name" class="form-label"></label>
                            <input type="text" class="form-control" placeholder="Product Name"  name="product_name" value="{{$product->product_name}}"/>
                            <span>@error('product_name'){{$message}}@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="product_details" class="form-label"></label>
                            <textarea name="product_details" class="form-control" placeholder="Product Datails" id="overview" rows="4" >{{$product->product_details}}</textarea>
                            <span>@error('product_details'){{$message}}@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="product_image" class="form-label"></label>
                            <span>{{$product->product_image}}</span>
                            <input type="file" class="form-control"name="product_image">
                            <span>@error('product_image'){{$message}}@enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="release_year" class="form-label"></label>
                            <input type="text" class="form-control" placeholder="Product Amount" name="product_amount" value="{{$product->product_amount}}">
                            <span>@error('product_amount'){{$message}}@enderror</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Update  Product</button>

                        @endif
                    </form>
    </div>
</div>
