<div class="row">
  <?php $this->load->view('includes/collapseAddForm'); ?>
  
  <div class="col-12 grid-margin collapse show" id="collapseExample">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?></h4>
        <form class="form-sample" id="crudFormAddApiData" action="<?php echo API_DOMAIN; ?>api/accounthead/accounthead/add" method="POST">
          <p class="card-description">Add new</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"> Name</label>
                  <input type="text" class="form-control" name="name" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"> Date</label>
                  <input type="date" class="form-control" name="date"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"> Type</label>
                  <input type="text" class="form-control" name="type"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"> Account No</label>     
                  <input type="number" class="form-control" name="accountNo"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label"> Opening Balance</label>
                  <input type="number" class="form-control" name="openingBalance"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
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
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/accounthead/accounthead_list" id="list_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/accounthead/accounthead/" id="delete_end_point">
  <input type="hidden" value="<?php echo API_DOMAIN; ?>api/accounthead/accounthead_details" id="show_endpoint">
  <input type="hidden" value="admin/mangement_payments/account_head_edit" id="edit_page_name">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $page_title; ?> <?php $this->load->view('includes/collapseFilterForm'); ?></h4>
        

         <div class="collapse show" id="collapseExampleFilter">
        <form id="filterForm">
          <div class="row">
            <div class="col-md-3 form-group">
            <input type="text" id="filterName" name="name" placeholder="Name" class="form-control">
            </div>
            <div class="col-md-3 form-group">
            <select id="filterStatus" name="status" class="form-control">
            <option value="">Select Status</option>
            <option value="Active">Active</option>
            <option value="Deactive">Inactive</option>
            </select>
            </div>
            <div class="col-md-3 form-group">
            <?php $this->load->view('includes/filter_form_btn'); ?>
            </div>
           </div>
       </form> 
       </div>

        <div class="table-responsive">
          <table class="table table-dark  table-striped" id="api_response_table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Date</th>
                <th>Type</th>
                <th>Account No</th>
                <th>Opening Balance</th>
                <th>Status</th>
                <th>Option</th>
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
                { "data": "name", "orderable": true  },
                { "data": "date", "orderable": true },
                { "data": "type", "orderable": true },
                { "data": "accountNo", "orderable": true },
                { "data": "openingBalance", "orderable": true },
               
                { 
                    "data": "status", "orderable": true,
                    "render": function(data, type, row) {
                        return renderStatusBtn(data, type, row)
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