<!--Select2 [ OPTIONAL ]-->
<link href='<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>' rel="stylesheet">
<!--Switchery [ OPTIONAL ]-->
<link href='<?php echo base_url("assets/plugins/switchery/switchery.min.css"); ?>' rel="stylesheet">

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Payment</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Pending Payment</li>
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
					        <table id="orderList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Order No</th>
                                        <th>Date</th>
                                        <th class="min-tablet">Customer Tel</th>
					                    <th class="min-tablet">Created By</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111111</td>
                                        <td>Tiger Nixon</td>
                                        <td><button class="btn btn-mint btn-xs" data-target="#addOrderModal" data-toggle="modal">Details</button></td>
                                    </tr>
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
<!-- Order Details -->
<div id="orderDetails" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="panel-group accordion" id="demo-acc-info-outline">
                <div class="panel panel-bordered panel-primary">
    
                    <!--Accordion title-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#demo-acc-info-outline" data-toggle="collapse" href="#demo-acd-info-outline-1" aria-expanded="false" class="collapsed">Job #1111</a>
                        </h4>
                    </div>
    
                    <!--Accordion content-->
                    <div class="panel-collapse collapse" id="demo-acd-info-outline-1" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <div class="row">
                                <h3>Flex</h3>
                                <h5>Width:100m Height:300m</h5> 
                            </div>

                            <div class="row">
                            <label for="demo-select2-placeholder">Assign To &nbsp;</label>
                                <select id="demo-select2-placeholder" class="form-control" style="width: 50%">
                                    <option value="AK">Sam</option>
                                    <option value="HI">Alex</option>
                                </select>
                            </div>
                            <div class="text-right">
                                <button id="btnApprove" class="btn btn-warning">Approve</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-bordered panel-primary">
    
                    <!--Accordion title-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#demo-acc-info-outline" data-toggle="collapse" href="#demo-acd-info-outline-2" class="collapsed" aria-expanded="false">Job #2222</a>
                        </h4>
                    </div>
    
                    <!--Accordion content-->
                    <div class="panel-collapse collapse" id="demo-acd-info-outline-2" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            Flex Width:100m Height:300m
                            <div class="text-right">
                                <button id="btnApprove" class="btn btn-warning">Approve</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-bordered panel-primary">
    
                    <!--Accordion title-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#demo-acc-info-outline" data-toggle="collapse" href="#demo-acd-info-outline-3" class="collapsed" aria-expanded="false">Job #3333</a>
                        </h4>
                    </div>
    
                    <!--Accordion content-->
                    <div class="panel-collapse collapse" id="demo-acd-info-outline-3" aria-expanded="false">
                        <div class="panel-body">
                        Flex Width:100m Height:300m
                            <div class="text-right">
                                <button id="btnApprove" class="btn btn-warning">Approve</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordian/ -->
        </div>
      </div>
  </div>
</div>
<!-- // -->
<!-- Item Modal -->
<div id="paymentModal" class="modal" role="dialog" data-keyboard="false" data-backdrop="static">
  <!-- Select2 -->
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Order Payment</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="panel">	            
                <form>
                    <div class="panel-body">
                        <!--<div class="row">
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
                            
                        </div>-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="order_total_lbl">Total</label>
                                    <p style="font-size:24px">Rs.<span id="order_total_lbl">0000.00</span></p>
                                </div>
                                <div class="form-group">
                                    <label for="order_due_lbl">Outstanding</label>
                                    <p style="font-size:24px">Rs.<span id="order_due_lbl">0000.00</span></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="item_qty">Price &nbsp;</label>
                                    <input id="custom_price_switch" type="checkbox">
                                    <input id="item_price_txt" type="number" class="form-control text-right" placeholder="Rs.0000.00">
                                </div>
                                <div class="form-group">
                                    <label for="demo-select2-placeholder">Payment Type</label>
                                    <select id="demo-select2-placeholder" class="form-control" >
                                        <option value="AK">Cash</option>
                                        <option value="HI">Cheque</option>
                                    </select>
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
          <button id="confirmPay" type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-check">&nbsp;&nbsp;</i>Confirm Pay</button>
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

<!--<script src='<?php echo base_url("assets/js/app/order_datatable.js"); ?>'></script>-->

<!--Chosen-->
<script src='<?php echo base_url("assets/plugins/chosen/chosen.jquery.min.js"); ?>' ></script>

<!--Select2-->
<script src='<?php echo base_url("assets/plugins/select2/js/select2.min.js"); ?>' ></script>

<!--Switchery [ OPTIONAL ]-->
<script src='<?php echo base_url("assets/plugins/switchery/switchery.min.js"); ?>' ></script>

<script>
$(document).on('nifty.ready', function() {
    var order_master_id;
    //$('#demo-chosen-select').chosen();
    //$('#demo-cs-multiselect').chosen({width:'100%'});

    $(".empSelect").select2();
    /*$("#demo-select2-placeholder").select2({
        placeholder: "Select a Employee",
        allowClear: true,
        dropdownParent: $("#orderDetails .modal-content")
    });*/

    $('#orderDetails').on('hidden.bs.modal', function () {
        $('#demo-acc-info-outline').empty();
        $('#demo-acc-info-outline').text("Loading...");
    });

    $.fn.DataTable.ext.pager.numbers_length = 5;
    //Order List Table
    var rowSelection = $('#orderList').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
            "previous": '<i class="demo-psi-arrow-left"></i>',
            "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "ajax": {
            url : "<?php echo site_url('order/payment_order_list');?>",
            type : 'GET',
            //dataSrc: 'result.json'
        },
        "columnDefs": [
            { "orderable": true, "targets": [2] }
            ]
    });

    $('#orderList').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
});
</script>
<script>
    $(document).on("click", '.btnApprove', function(e) {
        var jobId = $(this).attr('id');
        //var empId = $('#7').children("option:selected").val();
        var empId = $('#' + jobId + ' option:selected').val();
        //console.log('Emp ID: ' + empId + 'EmpT :' + empID2);
        e.preventDefault();

        $.ajax({
            url : "<?php echo site_url('order/pay');?>",
            method : "POST",
            data : {order_job_id: jobId, emp_id: empId, order_master_id: order_master_id},
            success: function(data){
                $.niftyNoty({
                    type: 'success',
                    container: 'floating',
                    html: 'Order #'+ order_master_id +' Payed',
                    //closeBtn: closebtn_alert,
                    /*floating: {
                        position: select_pos.val(),
                        animationIn: select_animin.val(),
                        animationOut: select_animout.val()
                    },*/
                    focus: true,
                    timer: 5000
                });
                $('#orderList').datatable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.order-info', function(){
        order_master_id = $(this).data("order");
        customer = $(this).data("cus");
        $.ajax({
            url : "<?php echo site_url('order/order_details_for_pay');?>",
            method : "GET",
            data : {order_m_id: order_master_id, customer: customer},
            success: function(data){
                $('#demo-acc-info-outline').html(data);
            }
        });
    })

    $(document).on('click', '#btnPay', function(){
        customer = $(this).data("cus");
        $.ajax({
            url : "<?php echo site_url('order/pay');?>",
            method : "GET",
            data : {order_m_id: order_master_id, customer: customer},
            success: function(data){
                var pdata = $.parseJSON(data);
                console.log(pdata['total']);
                $('#item_price_txt').val(pdata['outstanding']);
                $('#item_price_lbl').text($('#item_price_txt').val());
                $('#order_total_lbl').text(pdata['total']);
                $('#order_due_lbl').text(pdata['outstanding']);
            }
        });
    })

    $('#item_price_txt').change(function(){
        $('#item_price_lbl').text($('#item_price_txt').val());
    });

    $(document).on('click', '#confirmPay', function(){
        var total = $('#order_total_lbl').text();
        var payed = $('#item_price_txt').val();
        var outstanding = $('#order_due_lbl').text();
        $.ajax({
            url : "<?php echo site_url('order/pay_confirm');?>",
            method : "POST",
            data : {order_m_id: order_master_id, total: total, payed: payed, outstanding: outstanding},
            success: function(data){
                console.log(data);
            }
        });
    })

    //Custom Price Switch
    var custom_price_switch = document.getElementById('custom_price_switch');
    new Switchery(custom_price_switch);
    $('#item_price_txt').prop('readonly', true);
    custom_price_switch.onchange = function() {
    if(custom_price_switch.checked){
        $('#item_price_txt').prop('readonly', false);
        $('input[type=radio][name=price_group]').prop('disabled', true && 'checked', false)
    }else{
        $('#item_price_txt').prop('readonly', true);
        $('input[type=radio][name=price_group]').prop('disabled', false && 'checked', false)
    }
    }

    $('#paymentModal').on('hidden.bs.modal', function () {
        $('#orderDetails').modal('toggle');
    });
    /*$(document).on('change', '#8', function(){
        console.log("In");
        var selectedCountry = $(this).children("option:selected").val();
        alert("You have selected the country - " + selectedCountry);
        var id = "8";
        var f = $('#' + id + ' option:selected').val();
        console.log('#' + id + 'option:selected');
    });*/

</script>