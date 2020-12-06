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
            <h1 class="page-header text-overflow">Equipment</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Manage Equipments</li>
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
					<div class="panel" id="equipments">
					    <div class="panel-heading">
                            <div class="panel-control">
                                <button class="demo-panel-ref-btn btn btn-success" data-target="#addEquipmentModal" data-toggle="modal" id="addNewProd">
                                    <i class="demo-pli-male icon-fw"></i> Add Equipment
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
                            <h3 class="panel-title">Equipments</h3>
                                    
					    </div>
					    <div class="panel-body">
					        <table id="equipmentTbl" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Equipment ID</th>
					                    <th>Serial No</th>
					                    <th class="min-tablet">Category</th>
                                        <th class="min-tablet">Supplier</th>
                                        <th class="min-tablet">Invoice No</th>
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
<div id="addEquipmentModal" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Equipment</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <!--Block Styled Form -->
            <!--===================================================-->
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="equipmentId">Equipment ID</label>
                            <input id="equipmentId" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="serialNo">Serial No.</label>
                            <input id="serialNo" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="category">Category</label>
                            <select id="category" class="form-control">
                                <!--<option value="1">CU</option>
                                <option value="2">Monitor</option>
                                <option value="3">Printer</option>-->
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select id="status" class="form-control" >
                                <option value="1">Active</option>
                                <option value="4">De-Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="supplier">Supplier</label>
                            <select id="supplier" class="form-control supplier" >
                                <!--<option value="2">Flex</option>
                                <option value="3">Sticker</option>
                                <option value="5">Plastic</option>-->
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="invoiceNo">Invoice No.</label>
                            <input id="invoiceNo" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Block Styled Form -->
        </div>
        <div class="modal-footer">
          <input id="id" hidden>
          <button id="addEquipment" type="button" class="btn btn-success"><i class="fa fa-plus">&nbsp;&nbsp;</i>Add</button>
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

<!--<script src='<?php echo base_url("assets/js/app/user_manage_datatable.js"); ?>'></script>-->

<script>
$(document).on('nifty.ready', function() {
    $.fn.DataTable.ext.pager.numbers_length = 5;
    // Row selection (single row)
    // -----------------------------------------------------------------
    $('#equipmentTbl').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    //User List Table
    var rowSelection = $('#equipmentTbl').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
            "previous": '<i class="demo-psi-arrow-left"></i>',
            "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "ajax": {
            url : "<?php echo site_url('equipment/equipment_list');?>",
            type : 'GET',
            //dataSrc: 'result.json'
        },
        "columnDefs": [
            { "orderable": false, "targets": [6] }
            ]
    });
    
    $(document).on('click', '.eqpInfo', function(){
        var eqp_id = $(this).data("eqp");
        $.ajax({
            url : "<?php echo site_url('user/submit_user');?>",
            method : "GET",
            data : {equipment_id: eqp_id},
            success: function(data){
                $('#demo-acc-info-outline').html(data);
            }
        });
    })

    function fill_dropdowns(){
        var $dropdown = $("#supplier");
        var $category = $("#category");
        $.ajax({
            url : "<?php echo site_url('equipment/supplier_list');?>",
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

        $.ajax({
            url : "<?php echo site_url('equipment/category_list');?>",
            method : "GET",
            //data : {order_m_id: order_master_id},
            success: function(data2){
                var cat = JSON.parse(data2);
                //$('#demo-acc-info-outline').html(data);
                $.each(cat, function() {
                    $category.append($("<option />").val(this[0]).text(this[1]));
                });
            }
        });
    }

    fill_dropdowns();

    $('#addNewProd').on('click', function(){
        //fill_dropdowns();
    })

    $(document).on('click', '#addEquipment', function(){
        //var order_master_id = $(this).data("order");
        let id = $('#id').val();
        let equipment_id = $('#equipmentId').val();
        let equipment_serial_no = $('#serialNo').val();
        let equipment_category = $('#category').val();
        let equipment_status = $('#status').val();
        let equipment_supplier = $('#supplier').val();
        let equipment_invoice = $('#invoiceNo').val();

        $.ajax({
            url : "<?php echo site_url('equipment/set_equipment');?>",
            method : "POST",
            data : {id: id, equipment_id: equipment_id, serial_no: equipment_serial_no, category: equipment_category, status: equipment_status, supplier: equipment_supplier, invoice_no: equipment_invoice},
            success: function(data){
                alert(data);
                //$('#demo-acc-info-outline').html(data);
            }
        });
    })

    $(document).on('click', '.eqpInfo', function(){
        //fill_dropdowns();
        let eqp_id = $(this).data("eqp");
        $.ajax({
            url : "<?php echo site_url('equipment/get_equipment_details');?>",
            method : "GET",
            data : {id: eqp_id},
            success: function(data){
                
                var result = JSON.parse(data);
                $.each(result, function() {
                    $('#id').val(this[0]);
                    $('#equipmentId').val(this[1]);
                    $('#serialNo').val(this[2]);
                    $('#category').val(this[3]);
                    $('#supplier').val(this[4]);
                    $('#invoiceNo').val(this[5]);
                    $('#status').val(this[6]);
                    //$('#productTypeE option:eq('+this[4]+')').prop('selected', true);
                    //$('#category option[value="'+this[3]+'"]').attr('selected', 'selected');
                    //$('#supplier option[value="'+this[4]+'"]').attr('selected', 'selected');
                });
            }
        });
    } )    

    $('#addEquipmentModal').on('hidden.bs.modal', function () {
        //$('#supplier').empty();
        //$('#category').empty();
        //$('#list').text("No required Product added");
        //req_p.length = 0;
        $('#equipmentId').val("");
        $('#serialNo').val("");
        $('#equipmentId').val("");
        $('#invoiceNo').val("");
        //$('.list-group-item').removeClass("active");
    });
});
</script>