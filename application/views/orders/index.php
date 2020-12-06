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
            <h1 class="page-header text-overflow">Order</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Order</li>
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
            <div class="col-sm-6">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <button class="demo-panel-ref-btn btn btn-default" id="addNewCus">
                                <i class="demo-pli-male icon-fw"></i> Add New
                            </button>
                        </div>
                        <h3 class="panel-title">Excisting Customer</h3>
                    </div>
                    <div class="panel-body">
                        <table id="cusList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Telephone Number</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--<tr>
                                    <td>Tiger Nixon</td>
                                    <td>0775656456</td>
                                    <td><button class="btn btn-mint btn-xs" data-target="#addOrderModal" data-toggle="modal">Add Order</button></td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>0712234567</td>
                                    <td><button class="btn btn-mint btn-xs" onclick="console.log('clicked');" data-target="#addOrderModal" data-toggle="modal">Add order</button></td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel">
                    <div class="panel-heading"><h3 class="panel-title">New Customer</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" id="cusName">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Telephone Number</label>
                                    <input type="text" class="form-control" id="cusTel">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Type</label>
                                    <select id="cusType" class="selectpicker">
                                        <option value="1">Retail</option>
                                        <option value="2">WholeSale</option>
                                        <option value="3">Non-Profit</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="text-right"><button class="btn btn-primary" data-target="#addOrderModal" data-toggle="modal" id="addOrder">Add Order</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Row selection (single row) -->
					<!--===================================================-->
					<div class="panel" id="orders">
					    <div class="panel-heading">
                            <div class="panel-control">
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
                            <h3 class="panel-title">Order List</h3>
                                    
					    </div>
					    <div class="panel-body">
					        <table id="orderList" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Order ID</th>
					                    <th>Date</th>
					                    <th class="min-tablet">Customer Tel</th>
					                    <th class="min-tablet">Created By</th>
                                        <th></th>
					                </tr>
					            </thead>
					            <tbody>
					                			                
					            </tbody>
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
<!-- Add Order -->
<div id="addOrderModal" class="modal" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Order</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <!--Block Styled Form -->
            <!--===================================================-->
            <form>
                <div class="panel-body">
                    <div class="row mar-btm">
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label">Type</label>
                                <div class="radio" id="orderType">
                                    <!-- Inline radio buttons -->
                                    <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="orderType" value="1" checked="">
                                    <label for="demo-inline-form-radio">Product</label>
        
                                    <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="orderType" value="2">
                                    <label for="demo-inline-form-radio-2">Job</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group" id="cat_list">
                                <a class="list-group-item" href="#" id="1">Flex</a>
                                <a class="list-group-item" href="#" id="2">Sticker</a>
                                <a class="list-group-item disabled" href="#">Designing</a>
                                <a class="list-group-item" href="#" id="3">Lacer Cutting</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Width</label>
                                    <input type="number" class="form-control" id="width">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Height</label>
                                    <input type="number" class="form-control" id="height">
                                </div>
                            </div>
                            <div class="text-right col-md-12">
                                <button class="btn btn-success btn-sm" id="btnAdd" type="button">Add</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group" hidden>
                                <a class="list-group-item" href="#">Flex</a>
                                <a class="list-group-item" href="#">Sticker</a>
                                <a class="list-group-item" href="#">Lacer Cutting</a>
                            </div>
                            <div id="list" class="list-group"><p class="text-center">No Product / Job added</p></div>
                        </div>
                    </div>
                    <div class="row" hidden>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Firstname</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Lastname</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row" hidden>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Website</label>
                                <input type="url" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Block Styled Form -->
        </div>
        <div class="modal-footer">
          <input id="item_id" value="" hidden>
          <button id="btnOrder" type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-cart-plus">&nbsp;&nbsp;</i>Submit Order</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
<!-- // -->
<!--End Modals-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->



<!--JAVASCRIPT-->
<!--DataTables [ OPTIONAL ]-->
<script src='<?php echo base_url("assets/plugins/datatables/media/js/jquery.dataTables.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/media/js/dataTables.bootstrap.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"); ?>'></script>

<script src='<?php echo base_url("assets/js/app/order_datatable.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/select2/js/select2.min.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/bootstrap-select/bootstrap-select.min.js"); ?>'></script>
<script>
    $(document).on('click','#addNewCus', function(){
        var search = $('input[type=search][class=form-control]').val();
        console.log(search);
    });

    $(document).ready(function(){
        $('input[type=search]').focus();

        var selectedVal;
        var selectedText;
        $(document).on('click', '.list-group-item', function(){
            $(this).toggleClass( "active");
            selectedVal = $(this).attr('id');
            //selectedVal = $(this).val();
            selectedText = $(this).text();
            console.log(selectedVal);
        })
        var cusInfo = [];
        $('#addOrder').click(function(){
            var cusName = $('#cusName').val();
            var cusTel = $('#cusTel').val();
            var cusType = $('#cusType').val();
            cusInfo.push([cusName, cusTel, cusType]);
            console.log(cusInfo);
        })
        $(document).on('click', '.e-order', function(){
            console.log("Clicked");
            var cusName = null;
            var cusTel = $(this).data("cus");
            var cusType = null;
            console.log(cusTel);
            cusInfo.push([cusName, cusTel, cusType]);
            console.log(cusInfo);
        })
        var order  = [];
        $('#btnAdd').click(function(){
            //this.preventDefault();
            //order = order.concat([1,2,3],[9,10,11]);
            var width = $('#width').val();
            var height = $('#height').val();
            order.push([selectedText, width, height, selectedVal]);
            console.log(order);
            //console.log(order[0]);
            $('#list').children().remove();
            for(var i  in order){
                $('<a class="list-group-item" href="#">'+ order[i][0] +' <input type="number" class="form-control input-sm" id="width"></a>').appendTo('#list');
            }

            $('#width').val("");
            $('#height').val("");
            $('.list-group-item').removeClass("active");

            function makeUL(array) {
                // Create the list element:
                var list = document.createElement('ul');

                /*for (var i = 0; i < array.length; i++) {
                    // Create the list item:
                    var item = document.createElement('a');
                    item.setAttribute("class", "list-group-item");

                    // Set its contents:
                    item.appendChild(document.createTextNode(array[i]));

                    // Add it to the list:
                    list.appendChild(item);
                }*/
                for (var i = 0; i < 1; i++) {
                    // Create the list item:
                    var item = document.createElement('a');
                    item.setAttribute("class", "list-group-item");

                    // Set its contents:
                    item.appendChild(document.createTextNode(array[i]));

                    // Add it to the list:
                    list.appendChild(item);
                }

                // Finally, return the constructed list:
                return list;
            }

            //document.getElementById('list').appendChild(makeUL(order[0]));

            $('#cusList').DataTable().ajax.reload();
            $('#orderList').DataTable().ajax.reload();
        })

        $('#addOrderModal').on('hidden.bs.modal', function () {
            $('#list').empty();
            $('#list').text("No Product / Job added");
            order.length = 0;
            $('#cusName').val("");
            $('#cusTel').val("");
            cusInfo.length = 0;
            $('#width').val("");
            $('#height').val("");
            $('.list-group-item').removeClass("active");
        });
        
        $('#btnOrder').click(function(){
          var order_type = $('#order_type').val();
          var mob_no  = $('#mob_no').val();
          //var product_price = $(this).data("productprice");
          //var quantity      = $('#' + product_id).val();
          $.ajax({
              url : "<?php echo site_url('Order/submit_order');?>",
              method : "POST",
              data : {order_data: order, cus_info: cusInfo},
              success: function(data){
                  //$('.detail_cart').html(data);
                  alert(data);
              }
          });
        });

        //Load Items
        //$(document).on('click','.item_cat', function(e){
            //e.preventDefault();
            //var cat_id = $(this).data("cat_id");
            //alert(cat_id);
            //$('#item_list').load("<?php echo site_url('pos/load_item');?>");
            $.ajax({
                url : "<?php echo site_url('order/product_list');?>",
                method : "GET",
                //data : {cat_id: cat_id},
                success: function(data){
                    $('#cat_list').html(data);
                }
            });
        //})

        $('#orderType input').on('change', function() {
            var cat_id = $('input[name=orderType]:checked', '#orderType').val();
            $.ajax({
                url : "<?php echo site_url('order/product_list');?>",
                method : "GET",
                data : {cat_type: cat_id},
                success: function(data){
                    $('#cat_list').html(data);
                }
            });
        });

        /*$("cusType").select2({
            placeholder: "Select a state",
            allowClear: false
        });*/


    });
</script>