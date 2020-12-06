<!--Select2 [ OPTIONAL ]-->
<link href='<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>' rel="stylesheet">

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Job List</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Printer Operator</li>
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
                                <button class="demo-panel-ref-btn btn btn-success" data-target="#" data-toggle="link">
                                    <i class="demo-pli-male icon-fw"></i> Add New Order
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
                            <h3 class="panel-title">Order List</h3>
                                    
					    </div>
					    <div class="panel-body">
					        <table id="jobList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Job No</th>
                                        <th>Job</th>
                                        <th>Order No</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>222222</td>
                                        <td>Garrett Winters</td>
                                        <td><button class="btn btn-mint btn-xs" onclick="console.log('clicked');" data-target="#orderDetails" data-toggle="modal">Details</button></td>
                                    </tr>
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
<!-- Add User -->
<div id="orderDetails" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body" id="jobDetails">
            <h3>Flex</h3>
            <h5>Width:100m Height:300m</h5> 

            <label for="demo-select2-placeholder">Assign To &nbsp;</label>
            <select id="demo-select2-placeholder" class="form-control" style="width: 50%">
                <option value="AK">Sam</option>
                <option value="HI">Alex</option>
            </select>
            <div class="text-right">
                <button id="btnApprove" class="btn btn-warning">Approve</button>
            </div>
        </div>
      </div>
  </div>
</div>
<!-- // -->
<!-- Item Modal -->
<div id="itemModal" class="modal" role="dialog">
  <!-- Select2 -->
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add to Cart</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="panel">	            
                <form>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group" style="margin:0px 50px 50px 50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="item_name">Item Name</label>
                                    <input id="item_name" type="text" class="form-control" readonly value="Item 1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="item_qty">Quantity</label>
                                    <input id="item_qty" type="number" class="form-control">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Price Group</label>
                                    <div style="margin-left:20px;" id="price_cat_list">
                                        <!-- Expected Radio button -->
                                        <!--<div class="radio" hidden>
                                            <input id="demo-form-radio" class="magic-radio" type="radio" name="price_group" value="1200.00">
                                            <label for="demo-form-radio">Group 1</label>
                                        </div>-->
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    
                                    <label class="control-label" for="item_qty">Price &nbsp;</label>
                                    <input id="custom_price_switch" type="checkbox">
                                    <input id="item_price_txt" type="number" class="form-control text-right" placeholder="Rs.0000.00">
                                </div>
                                <div class="form-group text-right align-self-center">
                                    <h2>Rs.<span id="item_price_lbl">0000.00</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
          <input id="item_id" value="" hidden>
          <button id="add_cart" type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-cart-plus">&nbsp;&nbsp;</i>Add to Cart</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
<!-- -->
<!--End Modals-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->



<!--JAVASCRIPT-->
<!--DataTables [ OPTIONAL ]-->
<script src='<?php echo base_url("assets/plugins/datatables/media/js/jquery.dataTables.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/media/js/dataTables.bootstrap.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"); ?>'></script>

<!--Chosen-->
<script src='<?php echo base_url("assets/plugins/chosen/chosen.jquery.min.js"); ?>' ></script>

<!--Select2-->
<script src='<?php echo base_url("assets/plugins/select2/js/select2.min.js"); ?>' ></script>

<script>
$(document).on('nifty.ready', function() {
    //$('#demo-chosen-select').chosen();
    //$('#demo-cs-multiselect').chosen({width:'100%'});

    $("#demo-select2").select2();
    $("#demo-select2-placeholder").select2({
        placeholder: "Select a Employee",
        allowClear: true,
        dropdownParent: $("#orderDetails .modal-content")
    });

    //Job Table
    $.fn.DataTable.ext.pager.numbers_length = 10;
    // Row selection (single row)
    // -----------------------------------------------------------------
    var rowSelection = $('#jobList').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
            "previous": '<i class="demo-psi-arrow-left"></i>',
            "next": '<i class="demo-psi-arrow-right"></i>',
            "infoEmpty": "There are currently no active jobs.",
            "emptyTable": "There are currently no active jobs.",
            "zeroRecords": "There are currently no active jobs."
            }
        },
        "ajax": {
            //url : "http://localhost:8080/pressMS/pressMS/index.php/order/order_list" ,
            url : "<?php echo site_url('order/job_list');?>",
            type : 'GET',
            //dataSrc: 'result.json'
        },
        dataSrc: "",
        "columnDefs": [
            { "orderable": false, "targets": [2] }
            ]
    });

    $('#jobList').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    var order_job_id;
    $(document).on('click', '.job-info', function(){
        order_job_id = $(this).data("order");
        $.ajax({
            url : "<?php echo site_url('order/job_details');?>",
            method : "GET",
            data : {order_j_id: order_job_id},
            success: function(data){
                $('#jobDetails').html(data);
            }
        });
    })

    $('#orderDetails').on('hidden.bs.modal', function () {
        $('#jobDetails').empty();
        $('#jobDetails').text("Loading...");
    });

    $(document).on('click', '#btnComplete', function(e) {
        e.preventDefault();
        console.log(order_job_id);
        var usage = [];
        $('.usage').each(function(i, obj) {
            //console.log($(this).attr('id') + " " + $(this).val());
            var product_id = $(this).attr('id');
            var product_usage = $(this).val();
            usage.push([product_id, product_usage]);
            console.log(usage); //For Debuggings
        });

        $.ajax({
            url : "<?php echo site_url('order/complete_order');?>",
            method : "POST",
            data : {order_job_id: order_job_id, usage: usage},
            success: function(data){
                //$('#cat_list').html(data);
                $.niftyNoty({
                    type: 'success',
                    container: 'floating',
                    html: 'Job #' + order_job_id + ' Completed',
                    //closeBtn: closebtn_alert,
                    /*floating: {
                        position: select_pos.val(),
                        animationIn: select_animin.val(),
                        animationOut: select_animout.val()
                    },*/
                    focus: true,
                    timer: 5000
                });
                usage.length = 0;
                order_job_id.length = 0;
                $('#jobList').datatable().ajax.reload();
            }
        });

    });

});
</script>