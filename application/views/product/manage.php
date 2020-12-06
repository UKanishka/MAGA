<style>
.item-btn{
    margin-top:5px;
    margin-right:5px;
}
</style>
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Products</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Manage Product/Items</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
        <!-- <hr class="new-section-sm bord-no">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-body text-center">
                    <div class="panel-heading">
                        <h3>Your content here...</h3>
                    </div>
                    <div class="panel-body">
                        <p>Start putting content on grids or panels, you can also use different combinations of grids.
                        <br>Please check out the dashboard and other pages.</p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-sm-12">
                <!-- Row selection (single row) -->
					<!--===================================================-->
					<div class="panel" id="users">
					    <div class="panel-heading">
                            <div class="panel-control">
                                <button class="demo-panel-ref-btn btn btn-success" data-target="#addProductModal" data-toggle="modal" id="addNewProd">
                                    <i class="demo-pli-male icon-fw"></i> Add Product
                                </button>
                                <button class="demo-panel-ref-btn btn btn-default" data-target="#users" data-toggle="panel-overlay">
                                    <i class="demo-psi-repeat-2 icon-fw"></i>
                                </button>
                                <div class="btn-group dropdown">
                                    <button data-toggle="dropdown" class="dropdown-toggle btn btn-default btn-active-primary" aria-expanded="false">
                                        <i class="caret"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" style="">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="panel-title">Products</h3>
                                    
					    </div>
					    <div class="panel-body">
					        <table id="userList" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Name</th>
					                    <th>Description</th>
					                    <th class="min-tablet">Status</th>
                                        <th class="min-tablet">Type</th>
					                    <th></th>
					                </tr>
					            </thead>
					            
					        </table>
					    </div>
					</div>
					<!--===================================================-->
					<!-- End Row selection (single row) -->
            </div>
        </div>
        
        
    </div>
    <!--===================================================-->
    <!--End page content-->


<!-- Modals-->
<!-- Add User -->
<div id="addProductModal" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Product/Job</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <!--Block Styled Form -->
            <!--===================================================-->
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input id="productName" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input id="productDesc" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Type</label>
                            <select id="productType" class="form-control" >
                                <option value="1">Product</option>
                                <option value="2">Job</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select id="productStatus" class="form-control" >
                                <option value="1">Active</option>
                                <option value="0">De-Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Required Items</label>
                            <select id="c_p" class="form-control c_p" >
                                <!--<option value="2">Flex</option>
                                <option value="3">Sticker</option>
                                <option value="5">Plastic</option>-->
                            </select>
                        </div>
                        <div class="text-right col-md-12">
                            <button class="btn btn-success btn-sm" id="btnAdd" type="button" disabled>Add</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Req. Item list</label>
                            <div id="list" class="list-group"><p class="text-center">No required Product added</p></div>
                        </div>
                    </div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Block Styled Form -->
        </div>
        <div class="modal-footer">
          <input id="item_id" value="" hidden>
          <button id="addProduct" type="button" class="btn btn-success"><i class="fa fa-plus">&nbsp;&nbsp;</i>Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
<!-- // -->
<!-- Edit Modal -->
<div id="editProductModal" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Manage Product/Item</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <!--Block Styled Form -->
            <!--===================================================-->
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input id="productNameE" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input id="productDescE" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Type</label>
                            <select id="productTypeE" class="form-control" >
                                <option value="1">Product</option>
                                <option value="2">Job</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select id="productStatusE" class="form-control" >
                                <option value="1">Active</option>
                                <option value="0">De-Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Required Items</label>
                            <select id="c_pE" class="form-control c_p" >
                                <!--<option value="2">Flex</option>
                                <option value="3">Sticker</option>
                                <option value="5">Plastic</option>-->
                            </select>
                        </div>
                        <div class="text-right col-md-12">
                            <button class="btn btn-success btn-sm" id="btnAddE" type="button" disabled>Add</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Req. Item list</label>
                            <div id="listE" class="list-group"><p class="text-center">No required Product added</p></div>
                        </div>
                    </div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Block Styled Form -->
        </div>
        <div class="modal-footer">
          <input id="update_item_id" value="" hidden>
          <button id="submitProductE" type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-plus">&nbsp;&nbsp;</i>Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
<!--End Modals-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->



<!--JAVASCRIPT-->
<!--DataTables [ OPTIONAL ]-->
<script src='<?php echo base_url("assets/plugins/datatables/media/js/jquery.dataTables.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/media/js/dataTables.bootstrap.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"); ?>'></script>

<!--<script src='<?php echo base_url("assets/js/app/user_manage_datatable.js"); ?>'></script>-->

<script>
$(document).on('nifty.ready', function() {
    $.fn.DataTable.ext.pager.numbers_length = 5;
    // Row selection (single row)
    // -----------------------------------------------------------------
    $('#userList').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    //User List Table
    var rowSelection = $('#userList').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
            "previous": '<i class="demo-psi-arrow-left"></i>',
            "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "ajax": {
            url : "<?php echo site_url('product/product_list');?>",
            type : 'GET',
            //dataSrc: 'result.json'
        },
        "columnDefs": [
            { "orderable": false, "targets": [4] }
            ]
    });
    
    $(document).on('click', '.userInfo', function(){
        var user_id = $(this).data("user");
        $.ajax({
            url : "<?php echo site_url('user/submit_user');?>",
            method : "GET",
            data : {user_id: user_id},
            success: function(data){
                $('#demo-acc-info-outline').html(data);
            }
        });
    })

    $('#addNewProd').on('click', function(){
        var $dropdown = $("#c_p");
        $.ajax({
            url : "<?php echo site_url('product/only_products');?>",
            method : "GET",
            //data : {order_m_id: order_master_id},
            success: function(data){
                var result = JSON.parse(data);
                //$('#demo-acc-info-outline').html(data);
                $.each(result, function() {
                    $dropdown.append($("<option />").val(this[0]).text(this[1]));
                });
            }
        });
    })

    $('#productType').on('change', function() {
        if(this.value == 1){
            $('#btnAdd').prop('disabled', true);
        }else{
            $('#btnAdd').prop('disabled', false);
        }
    });

    var req_p  = [];
    var c_p_text = [];
    $('#btnAdd').click(function(){
        var c_p = $('#c_p').val();
        
        req_p.push(c_p);
        
        c_p_text.push($('#c_p option:selected').text());
        console.log(c_p_text);
        //console.log(order[0]);
        $('#list').children().remove();
        for(var i  in req_p){
            $('<a class="list-group-item" href="#">'+ c_p_text[i] +'</a>').appendTo('#list');
        }
    })

    $(document).on('click', '#addProduct', function(){
        //var order_master_id = $(this).data("order");
        var product_name = $('#productName').val();
        var product_desc = $('#productDesc').val();
        var product_type = $('#productType').val();
        var product_status = $('#productStatus').val();
        console.log(product_name);
        console.log(product_desc);
        console.log(product_type);
        console.log(product_status);
        console.log(req_p);
        $.ajax({
            url : "<?php echo site_url('product/add_product');?>",
            method : "POST",
            data : {product_name: product_name, product_desc: product_desc, product_type: product_type, product_status: product_status, product_map_data: req_p},
            success: function(data){
                alert(data);
                //$('#demo-acc-info-outline').html(data);
            }
        });
    })

    $(document).on('click', '#submitProduct', function(){
        var order_master_id = $(this).data("order");
        $.ajax({
            url : "<?php echo site_url('user/submit_user');?>",
            method : "POST",
            data : {order_m_id: order_master_id},
            success: function(data){
                $('#demo-acc-info-outline').html(data);
            }
        });
    })

    $(document).on('click', '.catInfo', function(){
        var product_id = $(this).data("cat");
        $.ajax({
            url : "<?php echo site_url('product/load_product_details');?>",
            method : "GET",
            data : {product_id: product_id},
            success: function(data){
                var result = JSON.parse(data);
                $.each(result, function() {
                    $('#productNameE').val(this[1]);
                    $('#productDescE').val(this[2]);
                    //$('#productTypeE option:eq('+this[4]+')').prop('selected', true);
                    $('#productTypeE option[value="'+this[4]+'"]').attr('selected', 'selected');
                    $('#productStatusE').val(this[3]);
                });
            }
        });
    } )    

    $('#addProductModal').on('hidden.bs.modal', function () {
        $('#list').empty();
        $('#list').text("No required Product added");
        req_p.length = 0;
        $('#productName').val("");
        $('#productDesc').val("");
        $('#productType').val("");
        $('#c_p').empty();
        //$('.list-group-item').removeClass("active");
    });
});
</script>