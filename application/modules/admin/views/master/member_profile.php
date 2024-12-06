<?php 
 $UserDetails = $this->Internal_model->get_branch_member('',$id) ;

 ?>
    <style>

        .breadcrumb {
         
            font-size: 14px;
            color:#000;
        }

        .breadcrumb a {
            text-decoration: none;
        }

        .card {
            background: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .tabs {
            display: flex;
            border-bottom: 2px solid #444;
            margin-bottom: 20px;
        }

        .tabs button {
            background: none;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            color: #bbb;
            margin-right: 10px;
            transition: 0.3s;
        }

        .tabs button.active {
            color: #03a9f4;
            border-bottom: 3px solid #03a9f4;
        }

        .tabs button:hover {
            color: #ffffff;
        }

        .tab-content {
            display: none;
            margin-top: 20px;
        }

        .tab-content.active {
            display: block;
        }

        .icon {
            font-size: 18px;
        }

        .form-label {
            font-size: 14px;
            font-weight: bold;
            color: #ddd;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
        }

        .form-input:focus {
            border-color: #03a9f4;
            outline: none;
        }

        .submit-btn {
            background-color: #03a9f4;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #0288d1;
        }

        .section-title {
            color: #ff00d3 !important;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

    
        .copy-btn, .regenerate-btn {
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
        }

        .copy-btn {
            background-color: #4caf50;
            color: white;
            border: none;
        }

        .copy-btn:hover {
            background-color: #388e3c;
        }

        .regenerate-btn {
            background-color: #ff9800;
            color: black;
            border: none;
        }

        .regenerate-btn:hover {
            background-color: #f57c00;
        }

        .error-message {
            color: #f44336;
            font-size: 12px;
            display: none;
        }

        /* Image Styling */
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            /* border-radius: 10%; */
            border: 4px solid #03a9f4;
        }
        
        /* Tab Content */
        .tab-panel {
            padding: 20px;
            background: #1e1e1e;
            border-radius: 8px;
        }
    </style>

<style>
    /* Styling for Personal Info */
    .personal-info {
        display: flex;
        flex-direction: column;
        gap: 15px; /* Space between each info item */
        font-size: 16px;
        color: #e0e0e0;
        margin-top: 20px;
    }

    .personal-info p {
        margin: 5px 0;
    }

    .personal-info b {
        color: #03a9f4; /* Blue color for labels */
        margin-right: 10px; /* Space between label and value */
    }

    .personal-info .info-text {
        font-weight: normal;
        color: #ffffff;
    }

    /* Profile Image Styling */
    .profile-img {
        width: 250px;
        height: 200px;
        object-fit: cover;
        border-radius: 5%;
        border: 4px solid #03a9f4;
    }

    /* Section Title Styling */
    .section-title {
        font-size: 24px;
        color: #ffffff;
        margin-bottom: 20px;
        text-align: center;
    }
</style>
<style>
  .form-section {
    margin-top: 20px;
    border: 1px solid #dcdcdc;
    padding: 20px;
}

.section-title {
    color: #007bff;
    font-size: 16px;
    margin-bottom: 10px;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 10px;
    align-items: center;
}

.grid-item {
    display: flex;
    flex-direction: column;
}

.checkbox-label {
    display: flex;
    align-items: center;
}

.checkbox-label input {
    margin-right: 5px;
}

.file-input,
.text-input,
.select-input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.text-input {
    width: 100%;
    padding: 10px;
}

.select-input {
    padding: 10px;
    border-radius: 4px;
}

</style>
<div class="container">
    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <a href="/Member/MemberProfile"><b>Member Profile</b></a>
    </nav>

    <!-- Card -->
    <div class="card">
        <!-- Tabs -->
        <div class="tabs" role="tablist">
            <button class="tab-button active" onclick="showTab('personal')" aria-selected="true">
                <span class="icon">📅</span> Personal
            </button>
            <button class="tab-button" onclick="showTab('document_details')" aria-selected="false">
                <span class="icon">📄</span> Document Details
            </button>
            <button class="tab-button" onclick="showTab('sales')" aria-selected="false">
                <span class="icon">🔑</span> Sales
            </button>
            <button class="tab-button" onclick="showTab('return')" aria-selected="false">
                <span class="icon">⚙️</span> Return
            </button>
            <button class="tab-button" onclick="showTab('Payment-details')" aria-selected="false">
                <span class="icon">💰</span> Payment
            </button>
        </div>

        <!-- Tab Content -->
        <div id="personal" class="tab-content active">
    <h3 class="section-title">Personal Info</h3>
    <div class="row">
        <!-- Image Column -->
        <div class="col-md-4">
            <div class="center-content">
                <img src="<?php echo $UserDetails[0]->profile_pic;?>" alt="Profile Picture" class="profile-img">
            </div>
        </div>
        
        <!-- Personal Info Columns -->
        <div class="col-md-4">
            <div class="personal-info">
                <p><b>First Name:</b> <?php echo $UserDetails[0]->name;?></p>
                <p><b>Last Name:</b> <?php echo $UserDetails[0]->last_name;?></p>
                <p><b>Gender :</b> <?php echo $UserDetails[0]->gender;?></p>
                <p><b>Country:</b> <?php echo $UserDetails[0]->country_name ;?></p>

            </div>
        </div>
        <div class="col-md-4">
            <div class="personal-info">
               
                <p><b>Pincode:</b> <?php echo $UserDetails[0]->zip_code;?></p>
                <p><b>State:</b> <?php echo $UserDetails[0]->state_name;?></p>
                <p><b>City:</b> <?php echo $UserDetails[0]->city_name;?></p>
                <p><b>Address:</b> <?php echo $UserDetails[0]->address;?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="personal-info">
                <p><b>Total Income :</b> <?php echo $UserDetails[0]->total_income;?></p>
                <p><b>marital Status:</b><?php echo $UserDetails[0]->marital_status;?></p>
                <p><b>Category:</b> <?php echo $UserDetails[0]->category;?></p>
                <p><b>Member code:</b> <?php echo $UserDetails[0]->member_code;?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="personal-info">
                <p><b>Email:</b> <?php echo $UserDetails[0]->email;?></p>
                <p><b>Mobile:</b> <?php echo $UserDetails[0]->mobile;?></p>
                <p><b>Alt Mobile:</b> <?php echo $UserDetails[0]->alt_mobile;?></p>
                <p><b>Location:</b> <?php echo $UserDetails[0]->location;?></p>
               
            </div>
        </div>

        
    </div>
</div>



        <!-- Document Details -->
        <div id="document_details" class="tab-content">
    <div class="container">
        <!-- Utility Bill of Business -->
        <div class="form-section">
            <h6 class="section-title">Utility Bill of Business</h6>
            <input type="hidden" name="type_id[]" value="9" />
            <div class="form-grid">
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="document_id[9][]" value="9" />
                        Utility Bill
                    </label>
                </div>
                <div class="grid-item">
                    <input type="file" name="document_file[9][9]" class="file-input" />
                </div>
                <div class="grid-item">
                    <input type="text" name="document_number[9][]" class="text-input" placeholder="Document Number" maxlength="4" />
                </div>
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="isVerified[9][]" value="1" />
                        Verified
                    </label>
                </div>
            </div>
        </div>

        <!-- Director and Shareholder Registry -->
        <div class="form-section">
            <h6 class="section-title">Director and Shareholder Registry</h6>
            <input type="hidden" name="type_id[]" value="10" />
            <div class="form-grid">
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="document_id[10][]" value="10" />
                        Registry
                    </label>
                </div>
                <div class="grid-item">
                    <input type="file" name="document_file[10][10]" class="file-input" />
                </div>
                <div class="grid-item">
                    <input type="text" name="document_number[10][]" class="text-input" placeholder="Document Number" maxlength="5" />
                </div>
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="isVerified[10][]" value="1" />
                        Verified
                    </label>
                </div>
            </div>
        </div>

        <!-- KYC Status -->
        <div class="form-section">
            <div class="form-grid">
                <div class="grid-item">
                    <label for="status">KYC Status</label>
                    <select name="status" id="status" class="select-input select2">
                        <option value="Success">Success</option>
                        <option value="Pending">Pending</option>
                        <option value="Reject">Reject</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn mt-3">
            <span class="icon">📤</span> Submit
        </button>
    </div>
</div>
     <!-- Sales -->
<div id="sales" class="tab-content">
     <div class="table-responsive">
        <table class="table table-hover js-basic-example dataTable table-custom spacing5 ">

            <thead>
              <tr>
                
                <th>Sr No</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>₹5000</td>
                <td>2024-12-01</td>
                <td>Credit Card</td>
            </tr>
            <tr>
                <td>2</td>
                <td>₹3000</td>
                <td>2024-12-02</td>
                <td>Cash</td>
            </tr>
        </tbody>
          </table>
        </div>
 </div>



        <!-- Return -->
<div id="return" class="tab-content">
 <div class="table-responsive">
        <table class="table table-hover js-basic-example dataTable table-custom spacing5 ">

            <thead>
              <tr>
                
                <th>Sr No</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Payment Mode</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>₹5000</td>
                <td>2024-12-01</td>
                <td>Credit Card</td>
                <td>John Doe</td>
            </tr>
            <tr>
                <td>2</td>
                <td>₹3000</td>
                <td>2024-12-02</td>
                <td>Cash</td>
                <td>Jane Smith</td>
            </tr>
        </tbody>
          </table>
        </div>
 </div>





        <!-- Payment Details -->
        <div id="Payment-details" class="tab-content">
        <div class="table-responsive">
        <table class="table table-hover js-basic-example dataTable table-custom spacing5 ">

            <thead>
              <tr>
                
                <th>Sr No</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Payment Mode</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>₹5000</td>
                <td>2024-12-01</td>
                <td>Credit Card</td>
                <td>John Doe</td>
            </tr>
            <tr>
                <td>2</td>
                <td>₹3000</td>
                <td>2024-12-02</td>
                <td>Cash</td>
                <td>Jane Smith</td>
            </tr>
        </tbody>
          </table>
        </div>
 </div>
        </div>
    </div>
</div>


    <script>
        function showTab(tabName) {
            const tabs = document.querySelectorAll('.tab-content');
            const tabButtons = document.querySelectorAll('.tabs button');

            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            tabButtons.forEach(button => {
                button.classList.remove('active');
            });

            document.getElementById(tabName).classList.add('active');
            const activeButton = Array.from(tabButtons).find(button => button.textContent.trim().toLowerCase() === tabName.replace('-', ' ').trim());
            activeButton.classList.add('active');
        }

        function handleCopyToClipboard(inputId) {
            const input = document.getElementById(inputId);
            input.select();
            document.execCommand('copy');
        }

        function handleRegenerate() {
            alert('Test API has been regenerated.');
        }
    </script>

