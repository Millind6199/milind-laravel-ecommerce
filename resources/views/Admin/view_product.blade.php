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
                            <input type="checkbox" checked  onclick="checkStatus({{$list->id}})"
                                   id="marked-{{$list->id}}">
                        @else
                            <input type="checkbox" onclick="checkStatus({{$list->id}})" id="marked-{{$list->id}}">
                        @endif
                    </td>
                    <td>{{$list->product_name}}</td>
                    <td>{{$list->product_details}}</td>
                    <td>{{$list->product_amount}}</td>
                    <td><img src="{{$list->product_image}}" width="80px" height="50px"></td>
                    <td class="status-{{$list->id}}">{{$list->product_status}}</td>
                    <td>
                        <a href="/editproduct/{{$list->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/remove/{{$list->id}}" class="btn btn-danger delete_btn"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>


            @endforeach


        </table>
    </div>

    <div class="container row ">
        <div class="col-md-4"></div>
        <div class=" col-4"></div>
        <div class="col-4"
            {{$data->links()}}

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
                console.log(id, statusData);
                $('.status-'+id).html('<span class="status-'+id+''+color+'">'+statusData+'</span>');
                // ye status class element to kahi dikh nahi ra
                // $('.change').html(data);
            },
        });
    }
    $(document).ready(function(){
        $('.delete_btn').click(function () {
            var id = $(this).parents('tr').attr('id');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type:"GET",
                        url:"/remove/"+id,
                        success:function(){
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            $('.produ-'+id).empty();
                        },
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        });
    });
</script>
