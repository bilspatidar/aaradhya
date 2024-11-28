<div class="row">
 
  <?php $this->load->view('includes/collapseAddForm'); ?>
  
  <div class="col-12 grid-margin collapse show " id="collapseExample">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?></h4>
        <form class="form-sample" id="crudFormAddApiData" action="<?php echo API_DOMAIN; ?>api/group/add_group/add" method="POST">

 
          <p class="card-description"><?php echo $this->lang->line('add_new');?></p>
          <div class="row">
          <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('bname');?></label>
          <input type="text" class="form-control" name="group_name" />
        </div>
      </div>
    </div>

    <!-- Group Code -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('code');?></label>
          <input type="text" class="form-control" name="group_code" />
        </div>
      </div>
    </div>

    <!-- Address -->
    

    <!-- Location -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('location');?></label>
          <input type="text" class="form-control" name="group_location" />
        </div>
      </div>
    </div>

      <!-- Address -->
      <div class="col-md-4">
                <div class="form-group row">
                <div class="col-sm-12">
            <label class="col-form-label"><?php echo $this->lang->line('country'); ?></label>
            <select name="country" id="country_id" class="form-control select2" onchange="getStates(this.value)">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
                <?php $countrys = $this->Internal_model->get_country();
                foreach ($countrys as $country) { ?>
                    <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="col-form-label"><?php echo $this->lang->line('state'); ?></label>
            <select name="state" id="state_id" class="form-control select2"onchange="getCity(this.value)">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
            </select>
        </div>
    </div>
</div>
    <!-- City -->
    <div class="col-md-4">
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="col-form-label"><?php echo $this->lang->line('city'); ?></label>
            <select name="city" id="city_id" class="form-control select2">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
            </select>
        </div>
    </div>
</div>

    <!-- Leader Name -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('leader_name');?></label>
          <input type="text" class="form-control" name="group_leader-name" />
        </div>
      </div>
    </div>

    <!-- Group Images (Multiple) -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('images');?></label>
          <input type="file" class="form-control" name="image" multiple />
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('address');?></label>
          <textarea class="form-control" name="group_address"></textarea>
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
        

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row">
<input type="hidden" value="<?php echo API_DOMAIN; ?>api/group/group_list/<?php echo $role;?>" id="list_end_point">
<input type="hidden" value="<?php echo API_DOMAIN; ?>api/group/group/" id="delete_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/group/group_details" id="show_endpoint">
  <input type="hidden" value="admin/master/group_edit" id="edit_page_name">
  <!-- <input type="hidden" value="admin/master/user_permission" id="permission_page_name"> -->
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
            <div class="col-md-4">
                <div class="form-group row">
                <div class="col-sm-12">
            <select name="branch_id" id="filterTwo" class="form-control select2"placeholder="<?php echo $this->lang->line('branch_name');?>">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
                <?php $branchs = $this->Internal_model->get_branch();
                foreach ($branchs as $branch) { ?>
                    <option value="<?php echo $branch->id; ?>"><?php echo $branch->name; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
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
                <th><?php echo $this->lang->line('code');?></th>
                <th><?php echo $this->lang->line('location');?></th>
                <th><?php echo $this->lang->line('leader_name');?></th>
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
      { "data": "group_name", "orderable": true },
      { "data": "group_code", "orderable": true },
      { "data": "group_location", "member_code": true },
      { "data": "group_leader-name", "orderable": true },

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
<script>
    let currentValue = 2; // Initial value

    function updateOutput() {
        document.getElementById('spinValue').textContent = currentValue;
		$("#value_of_spin").val(currentValue);
    }

    function increment() {
        if (currentValue < 1000) {
            currentValue++;
            updateOutput();
        }
    }

    function decrement() {
        if (currentValue > 1) {
            currentValue--;
            updateOutput();
        }
    }
    function increment() {
    let spinValue = document.getElementById('spinValue');
    let hiddenInput = document.getElementById('value_of_spin');
    let currentValue = parseInt(spinValue.innerText);
    spinValue.innerText = currentValue + 1;
    hiddenInput.value = currentValue + 1; // Update the hidden input
}

function decrement() {
    let spinValue = document.getElementById('spinValue');
    let hiddenInput = document.getElementById('value_of_spin');
    let currentValue = parseInt(spinValue.innerText);
    if (currentValue > 1) { // Prevent decrementing below 1
        spinValue.innerText = currentValue - 1;
        hiddenInput.value = currentValue - 1; // Update the hidden input
    }
}

	
</script>
