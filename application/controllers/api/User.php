<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    require(APPPATH.'/libraries/REST_Controller.php');
    use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
    $this->cors_header();
    parent::__construct();
	$this->load->helper('security');
		
		$this->load->model('user_model');
        header('Access-Control-Allow-Origin: *');
		
	}

	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	 
	 public function member_profile_list_post() {
        $input_data = file_get_contents('php://input');
        $request_data = json_decode($input_data, true);
    
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
    
        $page = isset($request_data['page']) ? $request_data['page'] : 1; // Default to page 1 if not provided
        $limit = isset($request_data['limit']) ? $request_data['limit'] : 10; // Default limit to 10 if not provided
        $filterData = isset($request_data['filterData']) ? $request_data['filterData'] : [];
    
        $getTokenData = $this->is_authorized('superadmin');
        $offset = ($page - 1) * $limit;
    
        $totalRecords =  $this->user_model->member_profile_get('yes', $id, $limit, $offset, $filterData);
        $data =  $this->user_model->member_profile_get('no', $id, $limit, $offset, $filterData);
    
        $totalPages = ceil($totalRecords / $limit);
    
        $response = [
            'status' => true,
            'data' => $data,
            'pagination' => [
                'page' => $page,
                'totalPages' => $totalPages,
                'totalRecords' => $totalRecords
            ],
            'message' => 'Member_profile fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }
    
    public function member_profile_details_get(){
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
        $getTokenData = $this->is_authorized('superadmin');
        $data =  $this->user_model->show($id);
        $response = [
            'status' => true,
            'data' => $data,
            'message' => 'Member_profile fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }

	public function register_post() {
         
		$_POST = json_decode($this->input->raw_input_stream, true);

			
		// set validation rules
		$this->form_validation->set_rules('name', 'Username', 'trim|required|xss_clean|alpha_numeric|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|is_unique[users.email]');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|xss_clean|min_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
           $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');
			
		} else {
			
			// set variables from the form
			$data['name'] = $this->input->post('name',TRUE);
			$data['email']    = $this->input->post('email',TRUE);
			$data['mobile']    = $this->input->post('mobile',TRUE);
			$data['password'] = password_hash($this->input->post('password',TRUE),PASSWORD_DEFAULT);
			$data['added'] = date('Y-m-d H:i:s');
			$data['status'] = 'Deactive';
			$data['user_type'] = $this->input->post('user_type',TRUE);
			
			if ($res = $this->user_model->create_user($data)) {
				if($data['user_type']=='merchant'){
				$data2['merchant_id'] = $res;
				$data2['mid'] = $this->merchant_keys_model->generateMid();
				$data2['api_key'] = $this->Common->GenerateLiveAPI();
				$data2['added'] = date('Y-m-d H:i:s');
				$data2['added_by'] = $res;
				$this->merchant_keys_model->create($data2);
				}
				
				// user creation ok
                $token_data['id'] = $res; 
                $token_data['username'] = $data['email'];
				
				$token_data['id']      = (int)$res;
				$token_data['user_type']      = (string)$data['user_type'];
				$token_data['email']     = (string)$data['email'];
				$token_data['name']     = (string)$data['name'];
				$token_data['logged_in']    = (bool)true;
				$token_data['status'] = (bool)$data['status'];
				
				
				// user login ok
				
				
				
                $tokenData = $this->authorization_token->generateToken($token_data);
                $final = array();
                $final['access_token'] = $tokenData;
                $final['status'] = true;
                $final['id'] = $res;
                $final['message'] = 'Thank you for registering your new account!';
                $final['note'] = 'You have successfully register.';
                $final['user_type'] = $token_data['user_type'];
				$final['logged_in'] =  (bool)true;

                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
				$this->response([ 'status' => FALSE,
                    'message' =>'There was a problem creating your new account. Please try again',
					'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
			}
			
		}
		
	}
	
	//merchant start
	
	public function merchant_list_post($id=''){
		$getTokenData = $this->is_authorized('superadmin');
		$filterData = json_decode($this->input->raw_input_stream, true);
		$user_type = 'merchant';
		$final = array();
		$final['status'] = true;
		$final['data'] = $this->user_model->get($user_type,$id,$filterData);
		$final['message'] = 'Merchant fetched successfully.';
		$this->response($final, REST_Controller::HTTP_OK); 

	}
	public function merchant_post($params='') {
        
		if($params=='add'){
			$getTokenData = $this->is_authorized('superadmin');
			$usersData    = json_decode(json_encode($getTokenData), true);
			$session_id   =  $usersData['data']['users_id'];
			
		$_POST = json_decode($this->input->raw_input_stream, true);
			
		// set validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|alpha_numeric_spaces|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|is_unique[users.email]');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|xss_clean|min_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[8]|callback_valid_password');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|min_length[8]|matches[password]');
		$this->form_validation->set_rules('company_name','Company Name','alpha_numeric_spaces');
		$this->form_validation->set_rules('websiteURL','Website URL','valid_url');
		//$this->form_validation->set_rules('business_registered', 'Business Registered', 'callback_date_valid'); 
		$this->form_validation->set_rules('merchant_pay_in_charge', 'Merchant pay in charge', 'numeric'); 
		$this->form_validation->set_rules('merchant_pay_out_charge', 'Merchant pay out charge', 'numeric'); 
		$this->form_validation->set_rules('settelment_charge', 'Settelment charge', 'numeric'); 
		$this->form_validation->set_rules('turnover', 'Turnover', 'numeric'); 
		$this->form_validation->set_rules('chargeback_percentage', 'Chargeback percentage', 'numeric'); 
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
            $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');
			
		} else {
			
			// set variables from the form
			$password = $this->input->post('password',TRUE);
			if(!empty($password)){
				$data['password'] = password_hash($password,PASSWORD_DEFAULT);
			}
			$name = $this->input->post('name',TRUE);
			if(!empty($name)){
				$data['name'] = $name;
			}
			$email = $this->input->post('email',TRUE);
			if(!empty($name)){
				$data['email'] = $email;
			}
			$mobile = $this->input->post('mobile',TRUE);
			if(!empty($mobile)){
				$data['mobile'] = $mobile;
			}
			$company_name = $this->input->post('company_name',TRUE);
			if(!empty($company_name)){
				$data['company_name'] = $company_name;
			}
			
			$postal_code = $this->input->post('postal_code',TRUE);
			if(!empty($postal_code)){
				$data['postal_code'] = $postal_code;
			}
			$country_id = $this->input->post('country_id',TRUE);
			if(!empty($country_id)){
				$data['country_id'] = $country_id;
			}
			$state_id = $this->input->post('state_id',TRUE);
			if(!empty($state_id)){
				$data['state_id'] = $state_id;
			}
			$city_id = $this->input->post('city_id',TRUE);
			if(!empty($city_id)){
				$data['city_id'] = $city_id;
			}
			$street_address = $this->input->post('street_address',TRUE);
			if(!empty($street_address)){
				$data['street_address'] = $street_address;
			}
			$street_address2 = $this->input->post('street_address2',TRUE);
			if(!empty($business_type_id)){
				$data['business_type_id'] = $business_type_id;
			}
			$business_category_id = $this->input->post('business_category_id',TRUE);
			if(!empty($business_category_id)){
				$data['business_category_id'] = $business_category_id;
			}
			$business_subcategory_id = $this->input->post('business_subcategory_id',TRUE);
			if(!empty($business_subcategory_id)){
				$data['business_subcategory_id'] = $business_subcategory_id;
			}
			$skypeID = $this->input->post('skypeID',TRUE);
			if(!empty($skypeID)){
				$data['skypeID'] = $skypeID;
			}
			$websiteURL = $this->input->post('websiteURL',TRUE);
			if(!empty($websiteURL)){
				$data['websiteURL'] = $websiteURL;
			}
			$merchant_pay_in_charge = $this->input->post('merchant_pay_in_charge',TRUE);
			if(!empty($merchant_pay_in_charge)){
				$data['merchant_pay_in_charge'] = $merchant_pay_in_charge;
			}
			$merchant_pay_out_charge = $this->input->post('merchant_pay_out_charge',TRUE);
			if(!empty($merchant_pay_out_charge)){
				$data['merchant_pay_out_charge'] = $merchant_pay_out_charge;
			}
			$settelment_charge = $this->input->post('settelment_charge',TRUE);
			if(!empty($settelment_charge)){
				$data['settelment_charge'] = $settelment_charge;
			}
			$turnover = $this->input->post('turnover',TRUE);
			if(!empty($turnover)){
				$data['turnover'] = $turnover;
			}
			$chargeback_percentage = $this->input->post('chargeback_percentage',TRUE);
			if(!empty($chargeback_percentage)){
				$data['chargeback_percentage'] = $chargeback_percentage;
			}
			$business_registered = $this->input->post('business_registered',TRUE);
			if(!empty($business_registered)){
				$data['business_registered'] = date('Y-m-d',strtotime($business_registered));
			}
			$data['encrypt_key'] = $this->Common->random_key_string();
			$data['added'] = date('Y-m-d H:i:s');
			$data['status'] = 'Active';
			$data['user_type'] = 'merchant';
			$data['addedBy'] = $session_id;
			
			if ($res = $this->user_model->create_user($data)) {
				
				// user creation ok
				$data2['merchant_id'] = $res;
				$data2['mid'] = $this->merchant_keys_model->generateMid();
				$data2['api_key'] = $this->Common->GenerateLiveAPI();
				$data2['added'] = date('Y-m-d H:i:s');
				$data2['added_by'] = $session_id;
				$this->merchant_keys_model->create($data2);

                $final = array();
                $final['status'] = true;
				$final['data'] = $this->user_model->get('merchant',$res);
                $final['message'] = 'Thank you for registering your new account!';
                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
				$this->response([ 'status' => FALSE,
                    'message' =>'Error in submit form',
					'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
			}
			
		}
		}
		if($params=='update'){
			$getTokenData = $this->is_authorized('superadmin');
			$usersData    = json_decode(json_encode($getTokenData), true);
			$session_id   =  $usersData['data']['users_id'];
			
		$_POST = json_decode($this->input->raw_input_stream, true);
		$check = $this->input->post('check');
		// set validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|alpha_numeric_spaces|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|xss_clean|min_length[10]');
		if(isset($check)){
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[8]|callback_valid_password');
		}
		$this->form_validation->set_rules('company_name','Company Name','alpha_numeric_spaces');
		$this->form_validation->set_rules('websiteURL','Website URL','valid_url');
		//$this->form_validation->set_rules('business_registered', 'Business Registered', 'callback_date_valid'); 
		$this->form_validation->set_rules('merchant_pay_in_charge', 'Merchant pay in charge', 'numeric'); 
		$this->form_validation->set_rules('merchant_pay_out_charge', 'Merchant pay out charge', 'numeric'); 
		$this->form_validation->set_rules('settelment_charge', 'Settelment charge', 'numeric'); 
		$this->form_validation->set_rules('turnover', 'Turnover', 'numeric'); 
		$this->form_validation->set_rules('chargeback_percentage', 'Chargeback percentage', 'numeric'); 
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
            $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');
			
		} else {
			
			// set variables from the form
			
			$password = $this->input->post('password',TRUE);
			if(!empty($password)){
				$data['password'] = password_hash($password,PASSWORD_DEFAULT);
			}
			$name = $this->input->post('name',TRUE);
			if(!empty($name)){
				$data['name'] = $name;
			}
			$email = $this->input->post('email',TRUE);
			if(!empty($name)){
				$data['email'] = $email;
			}
			$mobile = $this->input->post('mobile',TRUE);
			if(!empty($mobile)){
				$data['mobile'] = $mobile;
			}
			$company_name = $this->input->post('company_name',TRUE);
			if(!empty($company_name)){
				$data['company_name'] = $company_name;
			}
			
			$postal_code = $this->input->post('postal_code',TRUE);
			if(!empty($postal_code)){
				$data['postal_code'] = $postal_code;
			}
			$country_id = $this->input->post('country_id',TRUE);
			if(!empty($country_id)){
				$data['country_id'] = $country_id;
			}
			$state_id = $this->input->post('state_id',TRUE);
			if(!empty($state_id)){
				$data['state_id'] = $state_id;
			}
			$city_id = $this->input->post('city_id',TRUE);
			if(!empty($city_id)){
				$data['city_id'] = $city_id;
			}
			$street_address = $this->input->post('street_address',TRUE);
			if(!empty($street_address)){
				$data['street_address'] = $street_address;
			}
			$street_address2 = $this->input->post('street_address2',TRUE);
			if(!empty($street_address2)){
				$data['street_address2'] = $street_address2;
			}
			$business_type_id = $this->input->post('business_type_id',TRUE);
			if(!empty($business_type_id)){
				$data['business_type_id'] = $business_type_id;
			}
			$business_category_id = $this->input->post('business_category_id',TRUE);
			if(!empty($business_category_id)){
				$data['business_category_id'] = $business_category_id;
			}
			$business_subcategory_id = $this->input->post('business_subcategory_id',TRUE);
			if(!empty($business_subcategory_id)){
				$data['business_subcategory_id'] = $business_subcategory_id;
			}
			$skypeID = $this->input->post('skypeID',TRUE);
			if(!empty($skypeID)){
				$data['skypeID'] = $skypeID;
			}
			$websiteURL = $this->input->post('websiteURL',TRUE);
			if(!empty($websiteURL)){
				$data['websiteURL'] = $websiteURL;
			}
			$business_registered = $this->input->post('business_registered',TRUE);
			if(!empty($business_registered)){
				$data['business_registered'] = date('Y-m-d',strtotime($business_registered));
			}
			$merchant_pay_in_charge = $this->input->post('merchant_pay_in_charge',TRUE);
			if(!empty($merchant_pay_in_charge)){
				$data['merchant_pay_in_charge'] = $merchant_pay_in_charge;
			}
			$merchant_pay_out_charge = $this->input->post('merchant_pay_out_charge',TRUE);
			if(!empty($merchant_pay_out_charge)){
				$data['merchant_pay_out_charge'] = $merchant_pay_out_charge;
			}
			$settelment_charge = $this->input->post('settelment_charge',TRUE);
			if(!empty($settelment_charge)){
				$data['settelment_charge'] = $settelment_charge;
			}
			$turnover = $this->input->post('turnover',TRUE);
			if(!empty($turnover)){
				$data['turnover'] = $turnover;
			}
			$chargeback_percentage = $this->input->post('chargeback_percentage',TRUE);
			if(!empty($chargeback_percentage)){
				$data['chargeback_percentage'] = $chargeback_percentage;
			}
			if(!empty($this->input->post('status',TRUE))){
			$data['status'] = $this->input->post('status');
			}
			$data['updatedBy'] = $session_id;
			$data['updated'] = date('Y-m-d H:i:s');
			$users_id = $this->input->post('users_id');
			$res = $this->user_model->update($data,$users_id);
			if ($res) {
				
				// user creation ok
                $final = array();
                $final['status'] = true;
				$final['data'] = $this->user_model->get('merchant',$users_id);
                $final['message'] = 'Merchant updated successfully.';
                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
				$this->response([ 'status' => FALSE,
                    'message' =>'There was a problem updating merchant. Please try again',
					'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
			}
			
		}
		}
	}
	
	public function merchant_delete($id)
    {
        $this->is_authorized('superadmin');
		
        $response = $this->user_model->delete_merchant($id);
	
		if($response){
			$this->response(['status' => true, 'message' => 'Merchant deleted successfully.'], REST_Controller::HTTP_OK);
		}else{
			$this->response(['status' => false, 'message' => 'Not deleted'], REST_Controller::HTTP_BAD_REQUEST);
		}
    }
	
	public function merchant_keys_list_post($id=''){
		$getTokenData = $this->is_authorized('superadmin');
		$filterData = json_decode($this->input->raw_input_stream, true);
		$final = array();
		$final['status'] = true;
		$final['data'] = $this->merchant_keys_model->get($id,$filterData);
		$final['message'] = 'Merchant Keys fetched successfully.';
		$this->response($final, REST_Controller::HTTP_OK);
	}
	public function merchant_keys_post($params='') {
        
		if($params=='add'){
			$getTokenData = $this->is_authorized('superadmin');
			$usersData    = json_decode(json_encode($getTokenData), true);
			$session_id   =  $usersData['data']['users_id'];
			
		$_POST = json_decode($this->input->raw_input_stream, true);
			
		// set validation rules
		$this->form_validation->set_rules('mid', 'Mid', 'trim|required|xss_clean|alpha_numeric_spaces');
		$this->form_validation->set_rules('merchant_id', 'Merchant Id', 'required|xss_clean|numeric');
		$this->form_validation->set_rules('webhook_url','Webhook URL','valid_url');
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
            $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');
			
		} else {
			
			// set variables from the form
			$mid = $this->input->post('mid',TRUE);
			if(!empty($mid)){
				$data['mid'] = $mid;
			}
			$webhook_url = $this->input->post('webhook_url',TRUE);
			if(!empty($webhook_url)){
				$data['webhook_url'] = $webhook_url;
			}
			$merchant_id = $this->input->post('merchant_id',TRUE);
			if(!empty($merchant_id)){
				$data['merchant_id'] = $merchant_id;
			}
			$data['status'] = 'Active';
			$data['api_key'] = $this->Common->GenerateLiveAPI();
			$data['added'] = date('Y-m-d H:i:s');
			$data['added_by'] = $session_id;
			
			if ($res = $this->merchant_keys_model->create($data)) {
				
				// user creation ok
				
                $final = array();
                $final['status'] = true;
				$final['data'] = $this->merchant_keys_model->get($res);
                $final['message'] = 'Merchant keys created successfully.';
                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
				$this->response([ 'status' => FALSE,
                    'message' =>'Error in submit form',
					'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
			}
			
		}
		}
		if($params=='update'){
			$getTokenData = $this->is_authorized('superadmin');
			$usersData    = json_decode(json_encode($getTokenData), true);
			$session_id   =  $usersData['data']['users_id'];
			
		$_POST = json_decode($this->input->raw_input_stream, true);
		// set validation rules
		$this->form_validation->set_rules('mid', 'Mid', 'trim|required|xss_clean|alpha_numeric_spaces');
		$this->form_validation->set_rules('merchant_id', 'Merchant Id', 'required|xss_clean|numeric');
		$this->form_validation->set_rules('webhook_url','Webhook URL','valid_url');
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
            $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');
			
		} else {
			
			// set variables from the form
			$merchant_id = $this->input->post('merchant_id',TRUE);
			if(!empty($merchant_id)){
				$data['merchant_id'] = $merchant_id;
			}
			$mid = $this->input->post('mid',TRUE);
			if(!empty($mid)){
				$data['mid'] = $mid;
			}
			$webhook_url = $this->input->post('webhook_url',TRUE);
			if(!empty($webhook_url)){
				$data['webhook_url'] = $webhook_url;
			}
			$status = $this->input->post('status',TRUE);
			if(!empty($status)){
				$data['status'] = $status;
			}
			
			$data['updated_by'] = $session_id;
			$data['updated'] = date('Y-m-d H:i:s');
			$id = $this->input->post('id');
			$res = $this->merchant_keys_model->update($data,$id);
			if ($res) {
				
				// user creation ok
                $final = array();
                $final['status'] = true;
				$final['data'] = $this->merchant_keys_model->get($id);
                $final['message'] = 'Merchant keys updated successfully.';
                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
				$this->response([ 'status' => FALSE,
                    'message' =>'There was a problem updating merchant keys. Please try again',
					'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
			}
			
		}
		}
	}
	public function merchant_keys_delete($id)
    {
        $this->is_authorized('superadmin');
		
        $response = $this->merchant_keys_model->delete($id);
		if($response){
			$this->response(['status' => true, 'message' => 'Merchant keys deleted successfully.'], REST_Controller::HTTP_OK);
		}else{
			$this->response(['status' => false, 'message' => 'Not deleted'], REST_Controller::HTTP_BAD_REQUEST);
		}
    }
	
	public function merchant_payment_link_list_post($id=''){
		$getTokenData = $this->is_authorized('superadmin');
		$filterData = json_decode($this->input->raw_input_stream, true);
		$final = array();
		$final['status'] = true;
		$final['data'] = $this->merchant_payment_link->get($id,$filterData);
		$final['message'] = 'Merchant payment link fetched successfully.';
		$this->response($final, REST_Controller::HTTP_OK);
	}
	public function merchant_payment_link_post($params='') {
        
		if($params=='add'){
			$getTokenData = $this->is_authorized('superadmin');
			$usersData    = json_decode(json_encode($getTokenData), true);
			$session_id   =  $usersData['data']['users_id'];
			
		$_POST = json_decode($this->input->raw_input_stream, true);
			
		// set validation rules
		$this->form_validation->set_rules('merchant_id', 'Merchant Id', 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules('payment_id[]', 'Payment Id', 'required|xss_clean|numeric');
		$this->form_validation->set_rules('currency[]','Currency', 'required');
		$this->form_validation->set_rules('serial_no[]', 'Serial no', 'numeric');
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
            $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');
			
		} else {
			
			// set variables from the form
			$currency = $_POST['currency'];
			$payment_id = $_POST['payment_id'];
			$mid = $_POST['mid'];
			$serial_no = $_POST['serial_no'];
			$cards = $_POST['cards'];
			
			$merchant_id = $this->input->post('merchant_id',TRUE);
			
			$lastId = array();
			for($i=0;$i<count($payment_id);$i++)
			{
			    
				if(!empty($payment_id[$i])){
					$data['payment_id'] 	= $payment_id[$i];
				}
				if(!empty($currency[$i])){
					$data['currency'] 	= $currency[$i];
				}
				if(!empty($mid[$i])){
					$data['mid'] 	= $mid[$i];
				}
				if(!empty($serial_no[$i])){
					$data['serial_no'] 	= $serial_no[$i];
				}
				if(!empty($cards[$i])){
					$data['cards'] 	= $cards[$i];
				}
			    
			    $data['merchant_id']=$merchant_id;
				$data['status'] = 'Active';
				$data['added'] = date('Y-m-d H:i:s');
				$data['addedBy'] = $session_id;
				
			    $res = $this->merchant_payment_link->create($data);
				$lastId[]= $res;
			}
			if ($res) {
				// user creation ok
                $final = array();
                $final['status'] = true;
				$final['data'] = $this->merchant_payment_link->get('',array('id'=>$lastId));
                $final['message'] = 'Merchant payment link created successfully.';
                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
				$this->response([ 'status' => FALSE,
                    'message' =>'Error in submit form',
					'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
			}
			
		}
		}
		if($params=='update'){
			$getTokenData = $this->is_authorized('superadmin');
			$usersData    = json_decode(json_encode($getTokenData), true);
			$session_id   =  $usersData['data']['users_id'];
			
		$_POST = json_decode($this->input->raw_input_stream, true);
		// set validation rules
		$this->form_validation->set_rules('merchant_id', 'Merchant Id', 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules('payment_id', 'Payment Id', 'required|xss_clean|numeric');
		$this->form_validation->set_rules('serial_no', 'Serial no', 'numeric');
		$this->form_validation->set_rules('mid','MID','trim');
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
            $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');
			
		} else {
			
			// set variables from the form
			$currency = $this->input->post('currency',TRUE);
			if(!empty($currency)){
			$data['currency']	= $currency;
			}
			$cards = $this->input->post('cards',TRUE);
			if(!empty($cards)){
			$data['cards']	= $cards;
			}
			$mid = $this->input->post('mid',TRUE);
			if(!empty($mid)){
				$data['mid'] = $mid;
			}
			$payment_id = $this->input->post('payment_id',TRUE);
			if(!empty($payment_id)){
				$data['payment_id'] = $payment_id;
			}
			$merchant_id = $this->input->post('merchant_id',TRUE);
			if(!empty($merchant_id)){
				$data['merchant_id'] = $merchant_id;
			}
			$serial_no = $this->input->post('serial_no',TRUE);
			if(!empty($serial_no)){
				$data['serial_no'] = $serial_no;
			}
			$status = $this->input->post('status',TRUE);
			if(!empty($status)){
				$data['status'] = $status;
			}
			$data['updatedBy'] = $session_id;
			$data['updated'] = date('Y-m-d H:i:s');
			$id = $this->input->post('id');
			$res = $this->merchant_payment_link->update($data,$id);
			if ($res) {
				
				// user creation ok
                $final = array();
                $final['status'] = true;
				$final['data'] = $this->merchant_payment_link->get($id);
                $final['message'] = 'Merchant payment link updated successfully.';
                $this->response($final, REST_Controller::HTTP_OK); 

			} else {
				
				// user creation failed, this should never happen
				$this->response([ 'status' => FALSE,
                    'message' =>'There was a problem updating merchant payment link. Please try again',
					'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
			}
			
		}
		}
	}
	public function merchant_payment_link_delete($id)
    {
        $this->is_authorized('superadmin');
		
        $response = $this->merchant_payment_link->delete($id);
		if($response){
			$this->response(['status' => true, 'message' => 'Merchant Payment Link deleted successfully.'], REST_Controller::HTTP_OK);
		}else{
			$this->response(['status' => false, 'message' => 'Not deleted'], REST_Controller::HTTP_BAD_REQUEST);
		}
    }
	
	//merchant end
	
	public function valid_password($password = '')
    {
        $password = trim($password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
        if (empty($password))
        {
            $this->form_validation->set_message('valid_password', 'The {field} field is required.');
            return FALSE;
        }
        if (preg_match_all($regex_lowercase, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
            return FALSE;
        }
        if (preg_match_all($regex_uppercase, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
            return FALSE;
        }
        if (preg_match_all($regex_number, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
            return FALSE;
        }
        if (preg_match_all($regex_special, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
            return FALSE;
        }
        if (strlen($password) < 5)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
            return FALSE;
        }
        if (strlen($password) > 32)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
            return FALSE;
        }
        return TRUE;
    }
	 public function date_valid($date)
  {
    $parts = explode("/", $date);
    if (count($parts) == 3) {      
      if (checkdate($parts[2], $parts[0], $parts[1]))
      {
        return TRUE;
      }
    }
    $this->form_validation->set_message('date_valid', 'The {field} field must be yyyy/mm/dd format.');
    return false;
  }
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */

	 public function login_post() {
		 // Enable error reporting


		$_POST = json_decode($this->input->raw_input_stream, true);
		// Validation rules set karein
		$this->form_validation->set_rules('email', 'Email/Mobile', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	
		if ($this->form_validation->run() == false) {
			// Validation me koi error hai, use view me bhej dein
			$array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
			$this->response([
				'status' => FALSE,
				'errors' =>$array_error,
				'message' =>'Form submit me error hai'
			], REST_Controller::HTTP_BAD_REQUEST,'','error');
	
		} else {
			// Form se variables set karein
			$email = $this->input->post('email');
			$password = $this->input->post('password');
	
			// Check karein ki identifier ek email hai ya mobile number
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$user = $this->user_model->resolve_user_login($email, $password, 'email');
			} else {
				$user = $this->user_model->resolve_user_login($email, $password, 'mobile');
			}
	
			if ($user) {
				// Handle successful login
				$users_id = $this->user_model->get_user_id_from_username($email); // Assuming you have a method to get user ID from identifier
				$user = $this->user_model->get_user($users_id);
				
				if($user->status=='Deactive'){
					// Account inactive hai
					$this->response(
						[
							'status' => FALSE,
							'message' =>'Account active nahi hai, kripya admin se sampark karein'
						], 
						REST_Controller::HTTP_UNAUTHORIZED
					);
				}
				
				// Session user data set karein
				$token_data['id'] = (int)$user->id;
				$token_data['user_type'] = (string)$user->user_type;
				$token_data['email'] = (string)$user->email;
				$token_data['name'] = (string)$user->name;
				$token_data['logged_in'] = (bool)true;
				$token_data['status'] = (bool)$user->status;
				
				// Successful login
				$tokenData = $this->authorization_token->generateToken($token_data);
				$final = array();
				$final['access_token'] = $tokenData;
				$final['status'] = true;
				$final['message'] = 'Login success!';
				$final['note'] = 'You are now logged in.';
				$final['logged_in'] = (bool)true;
				$final['user_type'] = $token_data['user_type'];
				$final['id'] = $token_data['id'];
				// CI session start
				$this->session->set_userdata('user_details', $final);
				// CI session end
				$this->response($final, REST_Controller::HTTP_OK); 
			} else {
				// Login failed
				$this->response(
					[
						'status' => FALSE,
						'message' =>'Wrong email or password'
					], 
					REST_Controller::HTTP_UNAUTHORIZED
				);
			}
		}
	}
	
	
	

	public function login_post00() {
		$_POST = json_decode($this->input->raw_input_stream, true);
		// set validation rules
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
            $array_error = array_map(function ($val) {
				return str_replace(array("\r", "\n"), '', strip_tags($val));
			}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
            $this->response([
                    'status' => FALSE,
					'errors' =>$array_error,
                    'message' =>'Error in submit form'
              ], REST_Controller::HTTP_BAD_REQUEST,'','error');

		} else {
			
			// set variables from the form
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($email,$password)) {
				
				$users_id = $this->user_model->get_user_id_from_username($email);
				$user    = $this->user_model->get_user($users_id);
				
				if($user->status=='Deactive'){
					// login failed
                $this->response(
				[
                    'status' => FALSE,
                    'message' =>'Account is not active please contact to admin'
                ]
			  , REST_Controller::HTTP_UNAUTHORIZED);
				}
				// set session user datas
				$token_data['id']      = (int)$user->id;
				$token_data['user_type']      = (string)$user->user_type;
				$token_data['email']     = (string)$user->email;
				$token_data['name']     = (string)$user->name;
				$token_data['logged_in']    = (bool)true;
				$token_data['status'] = (bool)$user->status;
				
				
				// user login ok
                $token_data['id'] = $token_data['id'];
                $token_data['username'] = $user->email;
                $tokenData = $this->authorization_token->generateToken($token_data);
                $final = array();
                $final['access_token'] = $tokenData;
                $final['status'] = true;
                $final['message'] = 'Login success!';
                $final['note'] = 'You are now logged in.';
				$final['logged_in'] = (bool)true;
				$final['user_type'] = $token_data['user_type'];
				$final['id'] = $token_data['id'];
                // start ci session 
                $this->session->set_userdata('user_details', $final);
                // end ci session 
                $this->response($final, REST_Controller::HTTP_OK); 
				
			} else {
				
				// login failed
                $this->response(
				[
                    'status' => FALSE,
                    'message' =>'Wrong email or password'
                ]
			  , REST_Controller::HTTP_UNAUTHORIZED);
				
			}
			
		}
		
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout_get() {

		if ($this->session->userdata('user_details')) {
			
			// remove session datas

			$this->session->unset_userdata('user_details');
			// user logout ok
			echo"1";
			
		} else {
			
			echo"0";
		}
		
	}
	
	public function update_password_post($params=''){
		if(!empty($params)){
			$getTokenData = $this->is_authorized($params);
		}else{
			$getTokenData = $this->is_authorized();
		}
		$usersData = json_decode(json_encode($getTokenData), true);
		$session_id = $usersData['data']['id'];
	
		$_POST = json_decode($this->input->raw_input_stream, true);
		
		// Validate old and new passwords
		$this->form_validation->set_rules('old_password', 'Old Password', 'trim|required');
		$this->form_validation->set_rules('password', 'New Password', 'trim|required');
		$this->form_validation->set_rules('cPassword', 'Confirm New Password', 'trim|required|matches[password]');
	
		if ($this->form_validation->run() === false) {
			// Validation failed, send validation errors to the view
			$array_error = array_map(function ($val) { return str_replace(array("\r", "\n"), '', strip_tags($val));}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
			$this->response(['status' => FALSE,'errors' => $array_error,'message' => 'Error in submit form'], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
		} else {
			// Update password
			$new_password = $this->input->post('password');
			$old_password = $this->input->post('old_password');
			if($new_password==$old_password){
				$this->response(['status' => FALSE,'errors' => ['Please choose different password'],'message' => 'Error in submit form'], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
			}
			else
			{
				$users_id = $usersData['data']['id']; 
				$exist_password =   $this->db->get_where('users',array('id'=>$users_id))->row()->password;
				if(password_verify($old_password, $exist_password))
				{
					$data['password'] = password_hash($new_password, PASSWORD_DEFAULT);
					$data['updatedBy'] = $session_id;
					$data['updated'] = date('Y-m-d H:i:s');
					$user_type = $usersData['data']['user_type']; // Assuming you are updating the password for the currently logged-in user
			
					$res = $this->user_model->update($data, $users_id);
			
					if ($res) {
						// Password update successful
						$final = array();
						$final['status'] = true;
						$final['data'] = $this->user_model->get($user_type, $users_id);
						$final['message'] = 'Password updated successfully.';
						$this->response($final, REST_Controller::HTTP_OK);
					} else {
						// Password update failed
						$this->response([
							'status' => FALSE,
							'errors' => [$this->db->error()],
							'message' => 'There was a problem updating password. Please try again',
						], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
					}
				  }
				  else
				  {
					  $this->response([
							'status' => FALSE,
							'errors' => ['Old Password does not match'],
							'message' => 'Error in submit form',
						], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
					 
				   }
				}
		    }	
	    }

		public function profile_update_post($params=""){
			{
				$getTokenData = $this->is_authorized();
				$usersData = json_decode(json_encode($getTokenData), true);
				$session_id = $usersData['data']['id'];
		
				$_POST = json_decode($this->input->raw_input_stream, true);
				$id = $this->input->post('id');
				// set validation rules
				$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces|min_length[3]');
				$this->form_validation->set_rules('email',$this->lang->line('email'), 'required|edit_unique[users.email.id.'.$id.']');
				$this->form_validation->set_rules('mobile',$this->lang->line('mobile'), 'required|min_length[10]|edit_unique[users.mobile.id.'.$id.']');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
		
				if ($this->form_validation->run() === false) {
					$array_error = array_map(function ($val) {
						return str_replace(array("\r", "\n"), '', strip_tags($val));
					}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
		
					$this->response([
						'status' => FALSE,
						'errors' => $array_error,
						'message' => 'Error in submit form'
					], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
				} else {
					// set variables from the form
					$data['name'] = $this->input->post('name');
					$data['company_name'] = $this->input->post('company_name');
					$data['address'] = $this->input->post('address');
					$data['mobile'] = $this->input->post('mobile');
					$data['email'] = $this->input->post('email');
					$users_id = $this->input->post('id');
					// Handle image upload
					
					///image 
				if(!empty($_POST['profile_pic'])){
					$base64_image = $_POST['profile_pic'];
					$quality = 90;
					$radioConfig = [
						'resize' => [
						'width' => 500,
						'height' => 300
						]
					 ];
					$uploadFolder = 'users'; 

					$data['profile_pic'] = $this->upload_media->upload_and_save($base64_image, $quality, $radioConfig, $uploadFolder);
					
					$imgData = $this->db->get_where('users',array('id'=>$users_id));
					if($imgData->num_rows()>0){
						$img =  $imgData->row()->profile_pic;
						if(file_exists($img) && !empty($img))
						{
							unlink($img);		
						}
					}
				}
				////image
					// populate $data array with the values from the form fields
					$data['updatedBy'] = $session_id;
					$data['updated'] = date('Y-m-d H:i:s');
					
					$res = $this->user_model->update($data, $users_id);
					
					
					if ($res) {
						// Profile update successful
						
						$final = array();
						$final['status'] = true;
						$final['data'] = $this->user_model->profile_list_get($users_id);
						$final['message'] = 'Profile updated successfully.';
						$this->response($final, REST_Controller::HTTP_OK);
						
					} else {
						// Profile update failed
						$this->response([
							'status' => FALSE,
							'message' => 'There was a problem updating the profile. Please try again',
							'errors' => [$this->db->error()]
						], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
					}
				}
			}
		}
		
	public function user_profile_update_post($params=""){
		if($params=='update'){
				$getTokenData = $this->is_authorized();
				$usersData = json_decode(json_encode($getTokenData), true);
				$session_id = $usersData['data']['id'];
		
				$_POST = json_decode($this->input->raw_input_stream, true);
				$id = $this->input->post('id');
				// set validation rules
				$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces|min_length[3]');
				$this->form_validation->set_rules('email',$this->lang->line('email'), 'required|edit_unique[users.email.id.'.$id.']');
				$this->form_validation->set_rules('mobile',$this->lang->line('mobile'), 'required|min_length[10]|edit_unique[users.mobile.id.'.$id.']');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
		
				if ($this->form_validation->run() === false) {
					$array_error = array_map(function ($val) {
						return str_replace(array("\r", "\n"), '', strip_tags($val));
					}, array_filter(explode(".", trim(strip_tags(validation_errors())))));
		
					$this->response([
						'status' => FALSE,
						'errors' => $array_error,
						'message' => 'Error in submit form'
					], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
				} else {
				
					$data['name'] = $this->input->post('name');
					$data['address'] = $this->input->post('address');
					$data['mobile'] = $this->input->post('mobile');
					$data['email'] = $this->input->post('email');
					//$id = $this->input->post('id');
					//$users_id = $this->input->post('id');
					// Handle image upload
					
					///image 
				if(!empty($_POST['profile_pic'])){
					$base64_image = $_POST['profile_pic'];
					$quality = 90;
					$radioConfig = [
						'resize' => [
						'width' => 500,
						'height' => 300
						]
					 ];
					$uploadFolder = 'users'; 

					$data['profile_pic'] = $this->upload_media->upload_and_save($base64_image, $quality, $radioConfig, $uploadFolder);
					
					$imgData = $this->db->get_where('users',array('id'=>$id));
					if($imgData->num_rows()>0){
						$img =  $imgData->row()->profile_pic;
						if(file_exists($img) && !empty($img))
						{
							unlink($img);		
						}
					}
				}
				////image
					// populate $data array with the values from the form fields
					$data['updatedBy'] = $session_id;
					$data['updated'] = date('Y-m-d H:i:s');
					
					$res = $this->user_model->update($data, $id);
					
					
					if ($res) {
						// Profile update successful
						
						$final = array();
						$final['status'] = true;
						//$final['data'] = $this->user_model->profile_list_get($id);
						$final['message'] = 'Profile updated successfully.';
						redirect('admin/master/my_profile', 'refresh');

						exit();
						$this->response($final, REST_Controller::HTTP_OK);
						redirect ('admin/master/my_profile');
					} else {
						// Profile update failed
						$this->response([
							'status' => FALSE,
							'message' => 'There was a problem updating the profile. Please try again',
							'errors' => [$this->db->error()]
						], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
					}
				}
			}
		}

	public function profile_list_get($id=''){
		$getTokenData = $this->is_authorized();
		
		$final = array();
		$final['status'] = true;
		$final['data'] = $this->user_model->profile_list_get($id);
		$final['message'] = 'Profile data fetched successfully.';
		$this->response($final, REST_Controller::HTTP_OK); 
	}
	
	public function table_name_get(){
        $tables = $this->db->list_tables();
		$sr = 1;
        foreach ($tables as $table){
           echo $sr ++ .' '.$table.'<br>';
        }
    }
	
	public function field_name_get(){
    $table = 'users'; 
    $fields = $this->db->list_fields($table);
    $sr = 1;

    echo '<h3>Fields in ' . $table . ' table:</h3>';
    echo '<ul>';
    foreach ($fields as $field){
        echo '<li>' . $sr++ . '. ' . $field . '</li>';
    }
    echo '</ul>';

    // अब fields के data को display करें
    $query = $this->db->get($table); // पूरा table data retrieve करें
    $results = $query->result_array();

    echo '<h3>Data in ' . $table . ' table:</h3>';
    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<tr>';

    // Table header (fields के नाम)
    foreach ($fields as $field){
        echo '<th>' . $field . '</th>';
    }
    echo '</tr>';

    // Table data
    foreach ($results as $row){
        echo '<tr>';
        foreach ($fields as $field){
            echo '<td>' . $row[$field] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

public function signup_post() {
    // Decode the JSON input
	// log_message('debug', 'signup_post method called');
    $_POST = json_decode($this->input->raw_input_stream, true);

	$this->form_validation->set_rules('name', 'Username', 'trim|required|xss_clean|alpha_numeric|min_length[3]');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|is_unique[users.email]');
	$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|xss_clean|min_length[10]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]');
	$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|min_length[6]|matches[password]');
	$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'trim|required');
	$this->form_validation->set_rules('user_type', 'User Type', 'trim|required');
	$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
	

    if ($this->form_validation->run() === false) {
        // Validation not ok, send validation errors to the view
        $array_error = array_map(function ($val) {
            return str_replace(array("\r", "\n"), '', strip_tags($val));
        }, array_filter(explode(".", trim(strip_tags(validation_errors())))));
        
        $this->response([
            'status' => FALSE,
            'errors' => $array_error,
            'message' => 'Error in submit form'
        ], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
    } else {
        // Set variables from the form
		$data = [
			'name' => $this->input->post('name', TRUE),
			'email' => $this->input->post('email', TRUE),
			'mobile' => $this->input->post('mobile', TRUE),
			'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
			'date_of_birth' => $this->input->post('date_of_birth', TRUE),
			'user_type' => $this->input->post('user_type', TRUE),
			'last_name' => $this->input->post('last_name', TRUE),
			'country_id' => $this->input->post('country_id', TRUE),
			'zip_code' => $this->input->post('zip_code', TRUE),
			'languages' => $this->input->post('languages', TRUE),
			'address' => $this->input->post('address', TRUE), // Add address here
			'profile_pic' => $this->input->post('profile_pic', TRUE), // Add profile_pic here
			'added' => date('Y-m-d H:i:s'),
			'status' => 'Active',
		];
		

        // Create user in the database
        if ($res = $this->user_model->create_user($data)) {
            // User creation ok
            $token_data = [
                'id' => $res,
                'username' => $data['email'],
                'user_type' => (string) $data['user_type'],
                'email' => (string) $data['email'],
                'name' => (string) $data['name'],
                'logged_in' => (bool) true,
                'status' => (bool) $data['status'],
            ];

            // Generate token
            $tokenData = $this->authorization_token->generateToken($token_data);
            $final = [
                'access_token' => $tokenData,
                'status' => true,
                'id' => $res,
                'message' => 'Thank you for signup your new account!',
                'note' => 'You have successfully signup.',
                'user_type' => $token_data['user_type'],
                'logged_in' => (bool) true,
            ];

            $this->response($final, REST_Controller::HTTP_OK);
        } else {
            // User creation failed, this should never happen
            $this->response([
                'status' => FALSE,
                'message' => 'There was a problem creating your new account. Please try again',
                'errors' => [$this->db->error()]
            ], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
        }
    }
}

}	
?>