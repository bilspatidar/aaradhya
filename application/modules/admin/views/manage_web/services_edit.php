<div class="modal_title_details"><h4>Edit Services</h4></div>
<form id="crudFormUpdateApiData" action="<?php echo API_DOMAIN; ?>api/services/services/update" method="POST" class="row g-3">
	<input type="hidden" name="id" class="form-control" value="<?php echo $data['id']; ?>"> 
     
	<div class="col-md-4 form-group">
		<label for="" class="form-label">Title</label>
		<input type="text" name="title" class="form-control" value="<?php echo $data['title']; ?>"> 
	</div>
	<div class="col-md-4 form-group">
		<label for="" class="form-label">Status</label>
		<select name="status" class="form-control input-sm">
			<option value="">Status</option>
			<option value="Active" <?php if( $data['status']=='Active'){ echo'selected'; }?>>Active</option>
			<option value="Deactive" <?php if( $data['status']=='Deactive'){ echo'selected'; }?>>Deactive</option>
		</select>
	</div>
	<div class="col-md-4 form-group">
                <label>File upload</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" name="image" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
             
    </div>
	<div class="col-md-12 form-group">
		<label for="" class="form-label">Description</label>
		<textarea name="description" class="form-control summernote"> <?php echo $data['description']; ?></textarea>
	</div>
	<div class="col-12"><br>
    <?php $this->load->view('includes/editFormButton'); ?>
	</div>
</form>

   