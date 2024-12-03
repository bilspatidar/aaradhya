<?php 
$productDetails = $this->Internal_model->get_product_transfer(); // Fetch data from the model
?>

 

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover js-basic-example dataTable table-custom spacing5 " id="api_response_table">
            <thead>
              <tr>
                <th>#</th>
                <th><?php echo $this->lang->line('Product_name'); ?></th>
                <th><?php echo $this->lang->line('status'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($productDetails as $index => $product): ?>
                <tr>
                  <td><?php echo $index + 1; ?></td>
                  <td><?php echo $product->product_name; ?></td> <!-- Access object properties with -> -->
                  <td>
                    <!-- Display status as a button or label -->
                    <button class="btn btn-<?php echo $product->status == 'Active' ? 'success' : 'warning'; ?> btn-sm">
                      <?php echo $product->status; ?>
                    </button>
                  </td>
                  
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>



