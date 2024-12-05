
<div class="row">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/received_stock_list" id="list_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/received_stock/" id="delete_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/received_stock_details" id="show_endpoint">
  <input type="hidden" value="admin/master/received_stock_edit" id="edit_page_name">
  <input type="hidden" value="admin/master/received_product_details_edit" id="permission_page_name">

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?> <?php $this->load->view('includes/collapseFilterForm'); ?></h4>
        

         <div class="collapse show" id="collapseExampleFilter">
        <form id="filterForm">
          <div class="row">
            <div class="col-md-3 form-group">
            <input type="text" id="filterName" name="name" placeholder="<?php echo $this->lang->line('name');?>" class="form-control">
            </div>
            <div class="col-md-3 form-group">
            <select id="filterStatus" name="status" class="form-control">
            <option value=""><?php echo $this->lang->line('select_status');?></option>
            <option value="Active"><?php echo $this->lang->line('active');?></option>
            <option value="Deactive"><?php echo $this->lang->line('inactive');?></option>
            </select>
            </div>
            <div class="col-md-3 form-group">
            <?php $this->load->view('includes/filter_form_btn'); ?>
            </div>
           </div>
       </form> 
       </div>

        <div class="table-responsive">
        <table class="table table-hover js-basic-example dataTable table-custom spacing5 " id="api_response_table">
            <thead>
              <tr>
                <th>#</th>
                <th><?php echo $this->lang->line('branch_name');?></th>
                <th><?php echo $this->lang->line('total_Product');?></th>
                <th><?php echo $this->lang->line('product_details');?></th>
              </tr>
            </thead>
            <tbody id="api_response_table_body">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  function renderTableData(){
    return [
                { "data": null, "render": function(data, type, row, meta) {
                    return meta.row + 1; // Adding 1 to meta.row to start from 1 instead of 0
                }},
                { "data": "branch_name", "orderable": true  },
				{ "data": "transfer_product_count", "orderable": true },
                { 
                   
                    "render": function(data, type, row) {
                        return renderPermisionBtn(data, type, row)
                    }
                },
               
            ]
  }
  
</script> 
