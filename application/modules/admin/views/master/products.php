<div class="row">
 
  <?php $this->load->view('includes/collapseAddForm'); ?>
  
  <div class="col-12 grid-margin collapse show " id="collapseExample">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?></h4>
        <form class="form-sample" id="crudFormAddApiData" action="<?php echo API_DOMAIN; ?>api/branch/branch/add" method="POST">
          <p class="card-description"><?php echo $this->lang->line('add_new');?></p>
          <div class="row">

    <div class="col-md-4">
                 <div class="form-group row">
             <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('bname'); ?></label>
          <input type="text" class="form-control" name="name" />
        </div>
      </div>
    </div>

    <!-- Metal (Gold, Silver, Other) -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('metal'); ?></label>
          <select class="form-control select2" name="metal">
            <option value="Gold">Gold</option>
            <option value="Silver">Silver</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Short Name -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('short_name'); ?></label>
          <input type="text" class="form-control" name="short_name" />
        </div>
      </div>
    </div>

    <!-- Barcode -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('barcode'); ?></label>
          <input type="text" class="form-control" name="barcode" />
        </div>
      </div>
    </div>

    <!-- Code -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('code'); ?></label>
          <input type="text" class="form-control" name="code" />
        </div>
      </div>
    </div>

    <!-- Weight -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('weight'); ?></label>
          <input type="number" class="form-control" name="weight" step="0.01" />
        </div>
      </div>
    </div>

    <!-- Other Weight -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('other_weight'); ?></label>
          <input type="number" class="form-control" name="other_weight" step="0.01" />
        </div>
      </div>
    </div>

    <!-- Making Charge -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('making_charge'); ?></label>
          <input type="number" class="form-control" name="making_charge" step="0.01" />
        </div>
      </div>
    </div>

    <!-- GST -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('gst'); ?></label>
          <input type="number" class="form-control" name="gst" step="0.01" />
        </div>
      </div>
    </div>

    <!-- Other Charges -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('other_charges'); ?></label>
          <input type="number" class="form-control" name="other_charges" step="0.01" />
        </div>
      </div>
    </div>

    <!-- Images -->
    <div class="col-md-4">
  <div class="form-group row">
    <div class="col-sm-12">
      <label class="col-form-label"><?php echo $this->lang->line('images'); ?></label>
      <input type="file" class="form-control" name="images[]" multiple accept="image/*" />
      <small class="form-text text-muted">You can select multiple images.</small>
    </div>
  </div>
</div>

    </div>
   

          <div class="row ">
            <div class="col-md-12">
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
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/branch/branch_list/" id="list_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/branch/branch_delete/" id="delete_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/branch/branch_details" id="show_endpoint">
  <input type="hidden" value="admin/master/branch_edit" id="edit_page_name">
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
            <!--<div class="col-md-3 form-group">
            <select id="filterStatus" name="status" class="form-control">
            <option value=""><?php echo $this->lang->line('select_status');?></option>
            <option value="Active"><?php echo $this->lang->line('active');?></option>
            <option value="Deactive"><?php echo $this->lang->line('inactive');?></option>
            </select>
            </div>-->
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
                <th><?php echo $this->lang->line('bname');?></th>
                <th><?php echo $this->lang->line('branch_phone');?></th>
                <th><?php echo $this->lang->line('branch_code');?></th>
                <th><?php echo $this->lang->line('branch_email');?></th>
                <th><?php echo $this->lang->line('status');?></th>
                <th><?php echo $this->lang->line('Action');?></th>
              </tr>
            </thead>
            <tbody id="api_response_table_body dataTables_paginate">
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
      {
        "data": null,
        "render": function(data, type, row, meta) {
          return meta.row + 1;
        }
      },
      { "data": "name", "orderable": true },
      { "data": "branch_phone", "orderable": true },
      { "data": "branch_code", "orderable": true },
      { "data": "branch_email", "orderable": true },
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
          return renderOptionBtn(data, type, row);
        }
      }
    ];
  }
</script>
