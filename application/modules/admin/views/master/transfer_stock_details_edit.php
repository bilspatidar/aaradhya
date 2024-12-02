

<div class="row">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/transfer_product_list" id="list_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/transfer_product_details/" id="delete_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/product/transfer_stock_details" id="show_endpoint">

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-hover js-basic-example dataTable table-custom spacing5 " id="api_response_table">
            <thead>
              <tr>
                <th>#</th>
                <th><?php echo $this->lang->line('Product_name');?></th>
                <th><?php echo $this->lang->line('status');?></th>
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
                { "data": "product_id", "orderable": true  },
			       	{ "data": "transfer_product_count", "orderable": true },
                    {
                   "data": "status",
                   "orderable": true,
                "render": function(data, type, row) {
                     return renderStatusBtn(data, type, row);
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
