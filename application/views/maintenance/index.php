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
            <h1 class="page-header text-overflow">Maintenance</h1>
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
                                <button class="demo-panel-ref-btn btn btn-success" data-target="#addMaintainModal" data-toggle="modal" id="addNewProd">
                                    <i class="demo-pli-male icon-fw"></i> Add New
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
					        <table id="maintenanceTbl" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>ID</th>
					                    <th>Equipment ID</th>
					                    <th class="min-tablet">Description</th>
                                        <th class="min-tablet">Date</th>
                                        <th class="min-tablet">Cost</th>
                                        <th class="min-tablet">Reported By</th>
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
<div id="addMaintainModal" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Equipment</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <!--Block Styled Form -->
            <!--===================================================-->
            <form id="maintenance">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label" for="equipment">Equipment</label>
                            <select id="equipment" class="form-control" name="equipment">
                                <!--<option value="1">CU</option>
                                <option value="2">Monitor</option>
                                <option value="3">Printer</option>-->
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="equipment">Date</label>
                            <div id="date-component">
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="date" name="date">
                                    <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label" for="invoice">Cost</label>
                            <input id="cost" type="text" class="form-control" name="cost">
                        </div>
                    </div>
                </div>
                <div class="row" hidden>
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
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label" for="desc">Description</label>
                            <textarea id="desc" class="form-control" rows="7" name="desc"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label" for="invoice">Invoice</label>
                            <input id="invoice" type="file" class="form-control" name="invoice">
                        </div>
                    </div>
                </div>
            <!--</form>-->
            <!--===================================================-->
            <!--End Block Styled Form -->
        </div>
        <div class="modal-footer">
          <input id="id" name="id" hidden>
          <button id="addMaintain" type="submit" class="btn btn-success"><i class="fa fa-plus">&nbsp;&nbsp;</i>Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
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
<script src='<?php echo base_url("assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"); ?>'></script>


<script>
$(document).on('nifty.ready', function() {
    $('#date-component .input-group.date').datepicker({autoclose:true});

    $.fn.DataTable.ext.pager.numbers_length = 5;
    // Row selection (single row)
    // -----------------------------------------------------------------
    $('#maintenanceTbl').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    //User List Table
    var rowSelection = $('#maintenanceTbl').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
            "previous": '<i class="demo-psi-arrow-left"></i>',
            "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "ajax": {
            url : "<?php echo site_url('maintenance/maintenance_list');?>",
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
        var $dropdown = $("#equipment");
        $.ajax({
            url : "<?php echo site_url('maintenance/equipment_list');?>",
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
    }

    fill_dropdowns();

    $('#addNewProd').on('click', function(){
        //fill_dropdowns();
    })

    $(document).on('submit', '#maintenance', function(e){
        e.preventDefault();
        $.ajax({
            url : "<?php echo site_url('maintenance/set_maintenance');?>",
            method : "POST",
            data:new FormData(this),
            success: function(data){
                alert(data);
                //$('#demo-acc-info-outline').html(data);
            }
        });
    })

    /**
    $(document).on('click', '#addMaintain', function(){
        //var order_master_id = $(this).data("order");
        let id = $('#id').val();
        let equipment = $('#equipment').val();
        let date = $('#date').val();
        let cost = $('#cost').val();
        let desc = $('#desc').val();
        let invoice = $('#invoice').val();

        $.ajax({
            url : "<?php echo site_url('maintenance/set_maintenance');?>",
            method : "POST",
            data : {id: id, equipment: equipment, date: date, cost: cost, desc: desc, invoice: invoice},
            success: function(data){
                alert(data);
                //$('#demo-acc-info-outline').html(data);
            }
        });
    })
     */

    $(document).on('click', '.maintenanceInfo', function(){
        //fill_dropdowns();
        let eqp_id = $(this).data("maintenance");
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

    $('#addMaintainModal').on('hidden.bs.modal', function () {
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

    //$("div#demo-dropzone").dropzone({ url: "/file/post" });
    
});
</script>