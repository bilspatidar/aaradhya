<?php 
$productDetails = $this->Internal_model->get_product_received($id); // Fetch data from the model
?>

<div class="card-body">
    <div class="table-responsive">
        <form id="crudFormUpdateApiData" action="<?php echo API_DOMAIN; ?>api/product/received_stock/update" method="POST">
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
                            <td><?php echo htmlspecialchars($product->product_name); ?></td> 

                            <input type="text" name="product_name" value="<?php echo $product->product_id ?? ''; ?>" />

                            <td>
                                <!-- Dropdown for status -->
                                <select name="status" class="form-control select2">
                                    <option value="Received" <?php echo $product->status == 'Received' ? 'selected' : ''; ?>>Received</option>
                                    <option value="Returned" <?php echo $product->status == 'Returned' ? 'selected' : ''; ?>>Returned</option>
                                    <option value="Pending" <?php echo $product->status == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                </select>
                            </td>
                            <td>
                                <!-- Input for remarks -->
                                <input type="text" name="id" value="<?php echo $product->id; ?>"> 
                                <input type="text" name="remarks" 
                                class="form-control" placeholder="Add remarks" value="<?php echo htmlspecialchars($product->remarks ?? ''); ?>">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- General Remarks Section -->
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="general_remark" class="form-label"><?php echo $this->lang->line('remark'); ?></label>
                        <textarea name="receiver_remark" class="form-control"
                         placeholder="Enter Reciver remark"><?php echo $product->receiver_remark ?? ''; ?></textarea>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-3 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
