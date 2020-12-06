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
            <h1 class="page-header text-overflow">Customer</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Manage Customers</li>
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
                                <button class="demo-panel-ref-btn btn btn-success" data-target="#addUserModal" data-toggle="modal">
                                    <i class="demo-pli-male icon-fw"></i> Add Customer
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
                            <h3 class="panel-title">Customers</h3>
                                    
					    </div>
					    <div class="panel-body">
					        <table id="customerList" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Name</th>
                                        <th>Tel No.</th>
					                    <th>Type</th>
					                    <th class="min-tablet">Status</th>
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
<div id="editCustomerModal" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Customer Details</h4>
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
                            <input type="text" class="form-control" id="cusName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Tel. Number</label>
                            <input type="text" class="form-control" id="cusTel">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Customer Type</label>
                            <select id="cusType" class="form-control" >
                                <option value="1">Retail</option>
                                <option value="2">WholeSale</option>
                                <option value="3">Non-Profit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select id="cusStatus" class="form-control" >
                                <option value="1">Active</option>
                                <option value="2">De-Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Block Styled Form -->
        </div>
        <div class="modal-footer">
          <input id="cusId" value="" hidden>
          <button id="submitCus" type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-plus">&nbsp;&nbsp;</i>Submit</button>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--<script src='<?php echo base_url("assets/js/app/user_manage_datatable.js"); ?>'></script>-->

<script>
$(document).on('nifty.ready', function() {
    $.fn.DataTable.ext.pager.numbers_length = 5;
    // Row selection (single row)
    // -----------------------------------------------------------------
    $('#customerList').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    //User List Table
    var rowSelection = $('#customerList').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
            "previous": '<i class="demo-psi-arrow-left"></i>',
            "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "ajax": {
            url : "<?php echo site_url('customer/customer_list');?>",
            type : 'GET',
            //dataSrc: 'result.json'
        },
        "columnDefs": [
            { "orderable": false, "targets": [3] }
            ]
    });
    
    $(document).on('click', '.cusEdit', function(){
        var cus_id = $(this).data("cus");
        $.ajax({
            url : "<?php echo site_url('customer/load_customer');?>",
            method : "GET",
            data : {cus_id: cus_id},
            success: function(data){
                //$('#demo-acc-info-outline').html(data);
                var result = JSON.parse(data);
                $.each(result, function() {
                    $('#cusId').val(this[0]);
                    $('#cusName').val(this[1]);
                    $('#cusTel').val(this[2]);
                    $('#cusType').val(this[3]);
                    $('#cusStatus').val(this[4]);
                })
            }
        });
    })

    $(document).on('click', '#submitCus', function(){
        var cus_id = $('#cusId').val();
        var cus_name = $('#cusName').val();
        var cus_tel = $('#cusTel').val().trim();
        var cus_type = $('#cusType').val();
        var cus_status = $('#cusStatus').val();
        $.ajax({
            url : "<?php echo site_url('customer/submit_customer');?>",
            method : "POST",
            data : {cus_id: cus_id, cus_name:cus_name, cus_tel:cus_tel, cus_type:cus_type, cus_status:cus_status},
            success: function(data){
                //$('#demo-acc-info-outline').html(data);
                console.log(data);
            }
        });
    })

    $(document).on('click', '.cusDel', function(){
        var cus_id = $(this).data("cus");
        swal({
            title: "Are you sure?",
            //text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url : "<?php echo site_url('customer/delete_customer');?>",
                    method : "POST",
                    data : {cus_id: cus_id},
                    success: function(data){
                        //$('#demo-acc-info-outline').html(data);
                        console.log(data);
                        swal("Customer has been deleted!", {
                            icon: "success",
                        });
                    }
                });
                
            }
        });
    })
});
</script>