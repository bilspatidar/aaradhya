<div class="row">
 
  <?php $this->load->view('includes/collapseAddForm'); ?>
  
  <div class="col-12 grid-margin collapse show " id="collapseExample">
    <div class="card">
      <div class="card-body"> 
        <h4 class="card-title"><?php echo $page_title;?></h4>
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
