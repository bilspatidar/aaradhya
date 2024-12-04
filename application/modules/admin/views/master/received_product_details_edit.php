<?php 
$productDetails = $this->Internal_model->get_product_received(); // Fetch data from the model
?>

<div class="card-body">
    <div class="table-responsive">
        <form id="crudFormUpdateApiData" action="<?php echo API_DOMAIN; ?>api/product/received_stock/update" method="POST" class="">
            <table class="table table-hover js-basic-example dataTable table-custom spacing5" id="api_response_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo $this->lang->line('Product_name'); ?></th>
                        <th><?php echo $this->lang->line('status'); ?></th>
                        <th><?php echo $this->lang->line('remark'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productDetails as $index => $product): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $product->product_name; ?></td> 
                            <td>
                                <!-- Dropdown for status -->
                                <select name="status[<?php echo $product->id; ?>]" class="form-control select2">
                                    <option value="Received" <?php echo $product->status == 'Received' ? 'selected' : ''; ?>>Received</option>
                                    <option value="Returned" <?php echo $product->status == 'Returned' ? 'selected' : ''; ?>>Returned</option>
                                    <option value="Pending" <?php echo $product->status == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                </select>
                            </td>
                            <td>
                                <!-- Input for remarks -->
                                <input type="hidden" name="id[<?php echo $product->id; ?>]" class="form-control" value="<?php echo $product->id; ?>"> 
                                <input type="text" name="receiver_remark[<?php echo $product->id; ?>]" class="form-control" placeholder="Add remarks" value="<?php echo $product->remarks ?? ''; ?>">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Submit Button -->
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
