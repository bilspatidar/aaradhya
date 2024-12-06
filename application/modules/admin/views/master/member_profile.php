
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
            color: #03a9f4;
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
        width: 350px;
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

    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="/Member/MemberProfile"><b>Member Profile</b></a>
        </div>

        <!-- Card -->
        <div class="card">
            <!-- Tabs -->
            <div class="tabs">
                <button class="active" onclick="showTab('personal')">
                    <span class="icon">📅</span> Personal
                </button>
                <button onclick="showTab('kyc-details')">
                    <span class="icon">📄</span> Document Details
                </button>
                <button onclick="showTab('authorize-url')">
                    <span class="icon">🔑</span> Authorize URL
                </button>
                <button onclick="showTab('api-details')">
                    <span class="icon">⚙️</span> API Details
                </button>
            </div>

            <!-- Tab Content -->
<div id="personal" class="tab-content active">
         <h3 class="section-title">Personal Info</h3>
    
    <!-- Profile Image -->
    <div style="display: flex; justify-content: center; margin: 20px 0;">
        <img src="https://centpays.com/uploads/no_file.jpg" alt="Profile" class="profile-img">
    </div>

    <!-- Personal Info Details -->
    <div class="personal-info">
        <p><b>First Name:</b><span class="info-text"> Ranjeet</span></p>
        <p><b>Last Name:</b><span class="info-text"> Patidar</span></p>
        <p><b>Skype ID:</b><span class="info-text"> 0</span></p>
        <p><b>Company Name:</b><span class="info-text"> Microsoft Technology</span></p>
        <p><b>Email:</b><span class="info-text"> bilspatidar@gmail.com</span></p>
        <p><b>Phone Number:</b><span class="info-text"> 7000890003</span></p>
        <p><b>Country:</b><span class="info-text"> India</span></p>
        <p><b>State:</b><span class="info-text"> Madhya Pradesh</span></p>
        <p><b>City:</b><span class="info-text"> Mandsaur</span></p>
        <p><b>Street Address:</b><span class="info-text"> Chavni Indore</span></p>
    </div>
</div>

<div id="kyc-details" class="tab-content">
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

        <!-- Contact phone number, Business email addresses of all directors and authorised personnel -->
        <div class="form-section">
            <h6 class="section-title">Contact phone number, Business email addresses of all directors and authorised personnel</h6>
            <input type="hidden" name="type_id[]" value="12" />
            <div class="form-grid">
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="document_id[12][]" value="11" />
                        Contact and Business email
                    </label>
                </div>
                <div class="grid-item">
                    <input type="file" name="document_file[12][11]" class="file-input" />
                </div>
                <div class="grid-item">
                    <input type="text" name="document_number[12][]" class="text-input" placeholder="Document Number" maxlength="6" />
                </div>
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="isVerified[12][]" value="1" />
                        Verified
                    </label>
                </div>
            </div>
        </div>

        <!-- Director Passport -->
        <div class="form-section">
            <h5 class="section-title">Director Passport</h5>
            <input type="hidden" name="type_id[]" value="14" />
            <div class="form-grid">
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="document_id[14][]" value="12" />
                        Director Passport
                    </label>
                </div>
                <div class="grid-item">
                    <input type="file" name="document_file[14][12]" class="file-input" />
                    <input type="file" name="document_file_back[14][12]" class="file-input" />
                </div>
                <div class="grid-item">
                    <input type="text" name="document_number[15][]" class="text-input" placeholder="Document Number" maxlength="1" />
                </div>
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="isVerified[14][]" value="1" />
                        Verified
                    </label>
                </div>
            </div>
        </div>

        <!-- Utility Bill of Director -->
        <div class="form-section">
            <h6 class="section-title">Utility Bill of Director</h6>
            <input type="hidden" name="type_id[]" value="15" />
            <div class="form-grid">
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="document_id[15][]" value="13" />
                        Utility Bill
                    </label>
                </div>
                <div class="grid-item">
                    <input type="file" name="document_file[12][11]" class="file-input" />
                </div>
                <div class="grid-item">
                    <input type="text" name="document_number[15][]" class="text-input" placeholder="Document Number" maxlength="1" />
                </div>
                <div class="grid-item">
                    <label class="checkbox-label">
                        <input type="checkbox" name="isVerified[15][]" value="1" />
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

           

            <div id="authorize-url" class="tab-content">
    <div class="tab-panel">
        <form class="validator-form" data-form-identifier="add_form" onsubmit="return false;">
            <div class="row">
                <div class="col-md-12">
                    <label for="authorize-url" class="form-label">Authorize URL</label>
                    <input type="text" id="authorize-url" name="authorize-url" class="form-input" required>
                    <span class="error-message">This field is required</span>
                </div>
            </div>
            
            <button type="submit" class="submit-btn mt-3">
                <span class="icon">📤</span> Submit
            </button>
        </form>
    </div>
</div>

            <div id="api-details" class="tab-content">
                <h5 class="section-title ">Live Credentials</h5>
                <div class="row">
                    <div class="col-md-2">
                        <label for="live-api" class="form-label"><b>Live API:</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="live-api" name="live_api" class="form-input" value="live_$2y$10$Ztzkrh1KGayF5jZN350xEeM2OV/n2hqBJFOSaismDznWxb9mO1B9a" readonly>
                    </div>
                    <div class="col-md-2">
                        <button class="copy-btn" onclick="handleCopyToClipboard('live-api')">Copy</button>
                    </div>
                </div>

                <h5 class="section-title mt-3">Test Credentials</h5>
                <div class="row">
                    <div class="col-md-2">
                        <label for="test-api" class="form-label"><b>Test API:</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="test-api" name="test_api" class="form-input" value="test_$2y$10$Ztzkrh1KGayF5jZN350xEeM2OV/n2hqBJFOSaismDznWxb9mO1B9a" readonly>
                    </div>
                    <div class="col-md-2">
                        <button class="copy-btn" onclick="handleCopyToClipboard('test-api')">Copy</button>
                    </div>
                </div>

               <div class="row">
  
        <h5 class="section-title mt-4">Regenerate Test API</h5>

    <div class="col-md-8 mt-3 ml-3">
        <button class="regenerate-btn" onclick="handleRegenerate()">Regenerate</button>
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

