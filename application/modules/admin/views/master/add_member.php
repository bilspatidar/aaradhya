<div class="row">
 
  <?php $this->load->view('includes/collapseAddForm'); ?>
  
  <div class="col-12 grid-margin collapse show " id="collapseExample">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?></h4>
        <form class="form-sample" id="crudFormAddApiData" action="<?php echo API_DOMAIN; ?>api/user/add_member/add" method="POST">

 
          <p class="card-description"><?php echo $this->lang->line('add_new');?></p>
          <div class="row">
          <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('first_name');?></label>
          <input type="text" class="form-control" name="name" />
        </div>
      </div>
    </div>

    <!-- Last Name -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('last_name');?></label>
          <input type="text" class="form-control" name="last_name" />
        </div>
      </div>
    </div>

    <!-- Member Code -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('member_code');?></label>
          <input type="text" class="form-control" name="member_code" />
        </div>
      </div>
    </div>

    <!-- Gender -->
    <div class="col-md-4">
               <div class="form-group row">
               <div class="col-sm-12">
             <label class="col-form-label"><?php echo $this->lang->line('gender'); ?></label>
                <div>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="male">
              <label class="form-check-label" for="male">Male</label>
               </div>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                  <label class="form-check-label" for="female">Female</label>
              </div>
                </div>
                </div>
                   </div>
                </div>


    <!-- Marital Status -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('marital_status');?></label>
          <select class="form-control select2" name="marital_status">
            <option value="Married">Married</option>
            <option value="Unmarried">Unmarried</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Category -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('category');?></label>
          <input type="text" class="form-control" name="category" />
        </div>
      </div>
    </div>

    <!-- Income -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('total_income');?></label>
          <input type="number" class="form-control" name="total_income" step="0.01" />
        </div>
      </div>
    </div>

    <!-- Total Family Members -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('total_family_member');?></label>
          <input type="number" class="form-control" name="total_family_member" />
        </div>
      </div>
    </div>

    <!-- Father's/Husband's Name -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('father_husband_name');?></label>
          <input type="text" class="form-control" name="father_husband_name" />
        </div>
      </div>
    </div>

    <!-- Mobile -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('mobile');?></label>
          <input type="number" class="form-control" name="mobile" />
        </div>
      </div>
    </div>

    <!-- Alternate Mobile -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('alt_mobile');?></label>
          <input type="number" class="form-control" name="alt_mobile" />
        </div>
      </div>
    </div>

    <!-- Email -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('email');?></label>
          <input type="email" class="form-control" name="email" />
        </div>
      </div>
    </div>

    <!-- Location -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('location');?></label>
          <input type="text" class="form-control" name="location" />
        </div>
      </div>
    </div>

    <!-- Address -->
    <div class="col-md-4">
                <div class="form-group row">
                <div class="col-sm-12">
            <label class="col-form-label"><?php echo $this->lang->line('country'); ?></label>
            <select name="country_id" id="country_id" class="form-control select2" onchange="getStates(this.value)">
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
            <select name="state_id" id="state_id" class="form-control select2"onchange="getCity(this.value)">
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
            <select name="city_id" id="city_id" class="form-control select2">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
            </select>
        </div>
    </div>
</div>

    

    <!-- Pincode -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('pincode');?></label>
          <input type="text" class="form-control" name="zip_code" />
        </div>
      </div>
    </div>

    <!-- Profile Picture -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('profile_pic');?></label>
          <input type="file" class="form-control" name="profile_pic" accept="image/*" />
        </div>
      </div>
    </div>

    <!-- Aadhar -->
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('aadharf');?></label>
          <input type="file" class="form-control" name="aadhar_front" accept="image/*" />
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('aadharb');?></label>
          <input type="file" class="form-control" name="aadhar_back" multiple />
        </div>
      </div>
    </div>
    <!-- Documents with Captions -->
    <div class="col-md-12">
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label"><?php echo $this->lang->line('address');?></label>
          <textarea class="form-control" name="address"></textarea>
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
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/user/member_list/customer" id="list_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/user/member/" id="delete_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/user/member_details" id="show_endpoint">
  <input type="hidden" value="admin/master/member_edit" id="edit_page_name">
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
                <th><?php echo $this->lang->line('name');?></th>
                <th><?php echo $this->lang->line('last_name');?></th>
                <th><?php echo $this->lang->line('member_code');?></th>
                <th><?php echo $this->lang->line('email');?></th>
                <th><?php echo $this->lang->line('mobile');?></th>
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
      { "data": "last_name", "orderable": true },
      { "data": "member_code", "member_code": true },
      { "data": "email", "orderable": true },
      { "data": "mobile", "orderable": true },

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
