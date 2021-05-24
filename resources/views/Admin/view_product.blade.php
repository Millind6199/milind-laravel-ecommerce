<x-sidebar/>
<!-- <p>{{$data}}</p> -->
<div class="row">
    <div class="col-3"></div>
    <div class="col-4 mt-5 " style="width:900px;margin-left:50px;">

        <select name="category">
            <option value=”0”>Select Product Category</option>
            @foreach($category as $cat)
                <option  value={{$cat->id}}>{{$cat->cat_name}}</option>
            @endforeach

        </select>
        <br><br>

        <table class="table" >
            <tr>
                <th></th>
                <th>Product Name</th>
                <th>Product Details</th>
                <th>Product Amount</th>
                <th>Product Image</th>
                <th>Product Status</th>
                <th>Action</th>
            </tr>
            @foreach($data as $list)
                <tr>
                    <td>
                        @if($list->product_status == 'Available')
                            <input type="checkbox"  onclick="checkStatus({{$list->id}})"
                                   id="marked-{{$list->id}}">
                        @else
                            <input type="checkbox" checked onclick="checkStatus({{$list->id}})" id="marked-{{$list->id}}">
                        @endif
                    </td>
                    <td>{{$list->product_name}}</td>
                    <td>{{$list->product_details}}</td>
                    <td>{{$list->product_amount}}</td>
                    <td><img src="{{$list->product_image}}" width="80px" height="50px"></td>
                    <td>{{$list->product_status}}</td>
                    <td>
                        <a href="/editproduct/{{$list->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/remove/{{$list->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>


            @endforeach


        </table>
    </div>
</div>

<script>
    function checkStatus(id,status){
        // alert(id);die;
        if ($("#marked-"+id).is(":checked")) {
            statusData = "Available";
            color = " text-success";
        } else {
            statusData = "Un Available";
            color = " text-danger";
        }
        //alert(statusData);
        $.ajax({
            type:"GET",
            url:"/updatestatus/",
            data: {
                id : id,
                status : statusData ,
            },
            dataType:"html",
            success:function(data){
                //alert("done");
                //if()
                $('.status-'+id).html('<span class="status-'+id+''+color+'">'+statusData+'</span>');
                $('.change').html(data);
            },
        });
    }
</script>
