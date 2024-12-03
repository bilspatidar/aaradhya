<div class="row">
  <?php $this->load->view('includes/collapseAddForm'); ?>
  
  <div class="col-12 grid-margin collapse show" id="collapseExample">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?></h4>
        <form class="form-sample" id="crudFormAddApiData" action="<?php echo API_DOMAIN; ?>api/product/transfer_stock/add" method="POST">
          <p class="card-description"><?php echo $this->lang->line('add_new');?></p>
          <div class="row">
          <div class="col-md-4">
                <div class="form-group row">
                <div class="col-sm-12">
            <label class="col-form-label"><?php echo $this->lang->line('branch_name'); ?></label>
            <select name="branch_id" id="branch_id" class="form-control select2">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
                <?php $branchs = $this->Internal_model->get_branch();
                foreach ($branchs as $branch) { ?>
                    <option value="<?php echo $branch->id; ?>"><?php echo $branch->name; ?> - <?php echo $branch->branch_code; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<div class="col-md-4">
                <div class="form-group row">
                <div class="col-sm-12">
            <label class="col-form-label"><?php echo $this->lang->line('Product_name'); ?></label>
            <select name="product_id[]" id="product_id[]" class="form-control select2"multiple>
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
                <?php $products = $this->Internal_model->get_product();
                foreach ($products as $product) { ?>
                    <option value="<?php echo $product->id; ?>"><?php echo $product->name; ?> - <?php echo $product->code; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="col-md-12">
              <div class="form-group row">
                <div class="col-sm-12">
                <label for="" class="form-label"><?php echo $this->lang->line('remark');?></label>
                <textarea name="remark" class="form-control" ></textarea>
                </div>
              </div>
            </div>	
          </div>
         
          <div class="row">
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <?php $this->load->view('includes/form_button'); ?>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/transfer_stock_list" id="list_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/transfer_stock/" id="delete_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/transfer_stock_details" id="show_endpoint">
  <input type="hidden" value="admin/master/transfer_stock_edit" id="edit_page_name">
  <input type="hidden" value="admin/master/transfer_product_details_edit" id="permission_page_name">

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
                <th><?php echo $this->lang->line('Action');?></th>
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
                { 
                    "data": null, 
                    "render": function(data, type, row) {
                      return renderOptionBtn(data, type, row)
                    }
                }
            ]
  }
  
</script> 
