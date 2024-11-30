<div class="row">
 
  <?php $this->load->view('includes/collapseAddForm'); ?>
  
  <div class="col-12 grid-margin collapse show " id="collapseExample">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?></h4>
        <form class="form-sample" id="crudFormAddApiData" action="<?php echo API_DOMAIN; ?>api/user/company_user/add" method="POST">
          <p class="card-description"><?php echo $this->lang->line('add_new');?></p>
          <div class="row">
          <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('name');?></label>
                  <input type="text" class="form-control" name="name" />
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('last_name');?></label>
                  <input type="text" class="form-control" name="last_name" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('employee_code');?></label>
                  <input type="text" class="form-control" name="employee_code" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('dob');?></label>
                  <input data-provide="datepicker" name="date_of_birth" data-date-autoclose="true" class="form-control">

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('doj');?></label>
                  <input data-provide="datepicker" name="date_of_joining" data-date-autoclose="true" class="form-control">

                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('location');?></label>
                  <input type="text" class="form-control" name="location" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('profile_pic');?></label>
                  <input type="file" name="profile_pic"  class="form-control">

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('role');?></label>
				  <select name="user_type" class="form-control select2" >
				  <option value=""><?php echo $this->lang->line('select_option');?></option>
				  <?php $get_types = $this->Common->getUserRole();
				  foreach($get_types as $get_type) { ?>
				  <option value="<?php echo $get_type->slug;?>"><?php echo $get_type->name;?></option>
				  <?php } ?>
				  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                <div class="col-sm-12">
            <label class="col-form-label"><?php echo $this->lang->line('branch_name'); ?></label>
            <select name="branch_id" id="branch_id" class="form-control select2">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
                <?php $branchs = $this->Internal_model->get_branch();
                foreach ($branchs as $branch) { ?>
                    <option value="<?php echo $branch->id; ?>"><?php echo $branch->name; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

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
            <select name="state_id" id="state_id" class="form-control select2">
                <option value=""><?php echo $this->lang->line('select_option'); ?></option>
            </select>
        </div>
    </div>
</div>

            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('email');?></label>
                  <input type="email" class="form-control" name="email" />
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('password');?></label>
                  <input type="password" class="form-control" name="password" />
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('confirm_password');?></label>
                  <input type="password" class="form-control" name="confirm_password" />
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('mobile');?></label>
                  <input type="number" class="form-control" name="mobile" />
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('alt_mobile');?></label>
                  <input type="number" class="form-control" name="alt_mobile" />
                </div>
              </div>
            </div>  
            <!-- <div class="col-md-4">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"><?php echo $this->lang->line('documents');?></label>
                  <input type="text" class="form-control" name="documents" />
                </div>
              </div>
            </div>   -->
            <div class="col-md-12">
              <div class="form-group row">
                <div class="col-sm-12">
                <label for="" class="form-label"><?php echo $this->lang->line('address');?></label>
                <textarea name="address" class="form-control" ></textarea>
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
 
  