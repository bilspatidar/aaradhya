<?php
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Product extends REST_Controller {

    public function __construct() {
        $this->cors_header();
        parent::__construct();
        $this->load->model('Product_model', 'product_modal');

        $this->load->model('product_model'); 
        $this->load->helper('security');
    }

    // product start
    public function product_list_post() {
        $input_data = file_get_contents('php://input');
        $request_data = json_decode($input_data, true);
    
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
    
        $page = isset($request_data['page']) ? $request_data['page'] : 1; // Default to page 1 if not provided
        $limit = isset($request_data['limit']) ? $request_data['limit'] : 10; // Default limit to 10 if not provided
        $filterData = isset($request_data['filterData']) ? $request_data['filterData'] : [];
    
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $offset = ($page - 1) * $limit;
    
        $totalRecords =  $this->product_model->get('yes', $id, $limit, $offset, $filterData);
       
        $data =  $this->product_model->get('no', $id, $limit, $offset, $filterData);
    
        $totalPages = ceil($totalRecords / $limit);
    
        $response = [
            'status' => true,
            'data' => $data,
            'pagination' => [
                'page' => $page,
                'totalPages' => $totalPages,
                'totalRecords' => $totalRecords
            ],
            'message' => 'Site fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }
 


    public function product_details_get(){
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $data =  $this->product_model->show($id);
        $response = [
            'status' => true,
            'data' => $data,
            'message' => 'Site fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }

    public function product_add_post($params='') {
        if($params=='add') {
            $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
            $usersData = json_decode(json_encode($getTokenData), true);
            $session_id = $usersData['data']['id'];
            $_POST = json_decode($this->input->raw_input_stream, true);
            // print_r ($getTokenData);
            // exit();
            // set validation rules
            $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|alpha_numeric_spaces');

            if ($this->form_validation->run() === false) {
                $array_error = array_map(function ($val) {
                    return str_replace(array("\r", "\n"), '', strip_tags($val));
                }, array_filter(explode(".", trim(strip_tags(validation_errors())))));

                $this->response([
                    'status' => FALSE,
                    'message' =>'Error in submit form',
                    'errors' =>$array_error
                ], REST_Controller::HTTP_BAD_REQUEST,'','error');
            } else {
                // set variables from the form
                $data['name'] = $this->input->post('name',TRUE);
				$data['metal'] = $this->input->post('metal',TRUE);
                $data['short_name'] = $this->input->post('short_name',TRUE);
                $data['barcode'] = $this->input->post('barcode',TRUE);
				$data['code'] = $this->input->post('code',TRUE);
				$data['weight'] = $this->input->post('weight',TRUE);
				$data['other_weight'] = $this->input->post('other_weight',TRUE);
                $data['making_charge'] = $this->input->post('making_charge',TRUE);
                $data['gst'] = $this->input->post('gst',TRUE);
                $data['category_id'] = $this->input->post('category_id',TRUE);
                $data['unit'] = $this->input->post('unit',TRUE);
                $data['other_charge'] = $this->input->post('other_charge',TRUE);
              
                if(!empty($_POST['image1'])){
					$base64_image = $_POST['image1'];
					$quality = 90;
					$radioConfig = [
						'resize' => [
						'width' => 500,
						'height' => 300
						]
					 ];
					$uploadFolder = 'products'; 

					$data['image1'] = $this->upload_media->upload_and_save($base64_image, $quality, $radioConfig, $uploadFolder);
					
				}


				if(!empty($_POST['image2'])){
					$base64_image = $_POST['image2'];
					$quality = 90;
					$radioConfig = [
						'resize' => [
						'width' => 500,
						'height' => 300
						]
					 ];
					$uploadFolder = 'products'; 

					$data['image2'] = $this->upload_media->upload_and_save($base64_image, $quality, $radioConfig, $uploadFolder);
					
				}
				
                $data['status'] = 'Active';
                $data['added'] = date('Y-m-d H:i:s');
                $data['addedBy'] = $session_id;
                
                if ($res = $this->product_model->create($data)) {
                    // branch creation ok
                    $final = array();
                    $final['status'] = true;
                    $final['data'] = $this->product_model->get($res);
                    $final['message'] = 'Site created successfully.';
                    $this->response($final, REST_Controller::HTTP_OK);
                } else {
                    // branch creation failed, this should never happen
                    $this->response([ 'status' => FALSE,
                        'message' =>'Error in submit form',
                        'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
                }
            }
        }
        // method for updating branch
        if ($params == 'update') {
            $getTokenData = $this->is_authorized('superadmin');
            $usersData = json_decode(json_encode($getTokenData), true);
            $session_id = $usersData['data']['id'];
        
            $_POST = json_decode($this->input->raw_input_stream, true);
        
            // set validation rules
            $this->form_validation->set_rules('name', 'Site Name', 'trim|required|xss_clean|alpha_numeric_spaces');
           
        
            if ($this->form_validation->run() === false) {
                $array_error = array_map(function ($val) {
                    return str_replace(array("\r", "\n"), '', strip_tags($val));
                }, array_filter(explode(".", trim(strip_tags(validation_errors())))));
        
                $this->response([
                    'status' => FALSE,
                    'message' => 'Error in submit form',
                    'errors' => $array_error
                ], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
            } else {
                // set variables from the form
                $name = $this->input->post('name',TRUE);
                if (!empty($name)) {
                    $data['name'] = $name;
                }
                // $city = $this->input->post('city',TRUE);
                // if (!empty($city)) {
                //     $data['city'] = $city;
                // }
				$data['branch_phone'] = $this->input->post('branch_phone',TRUE);
                $data['branch_code'] = $this->input->post('branch_code',TRUE);
				$data['branch_email'] = $this->input->post('branch_email',TRUE);
				$data['branch_address'] = $this->input->post('branch_address',TRUE);
				$data['branch_location'] = $this->input->post('branch_location',TRUE);
                $data['lang'] = $this->input->post('lang',TRUE);
                $data['latt'] = $this->input->post('latt',TRUE);
                $data['country_id'] = $this->input->post('country_id',TRUE);
                $data['state_id'] = $this->input->post('state_id',TRUE);
				$data['city_id'] = $this->input->post('city_id',TRUE);
                $data['area_name'] = $this->input->post('area_name',TRUE);
                $status = $this->input->post('status',TRUE);
                if (!empty($status)) {
                    $data['status'] = $status;
                }
				if(!empty($_POST['branch_image'])){
					$base64_image = $_POST['branch_image'];
					$quality = 90;
					$radioConfig = [
						'resize' => [
						'width' => 500,
						'height' => 300
						]
					 ];
					$uploadFolder = 'branch'; 

					$data['branch_image'] = $this->upload_media->upload_and_save($base64_image, $quality, $radioConfig, $uploadFolder);
					$imgData = $this->db->get_where('blog',array('id'=>$id));
					if($imgData->num_rows()>0){
						$img =  $imgData->row()->branch_image;
						if(file_exists($img) && !empty($img))
						{
							unlink($img);		
						}
					}
				}
                $data['updated_by'] = $session_id;
                $data['updated'] = date('Y-m-d H:i:s');
                $id = $this->input->post('id');
                $res = $this->product_model->update($data, $id);
        
                if ($res) {
                    // Branch update ok
                    $final = array();
                    $final['status'] = true;
                    $final['data'] = $this->product_model->get($id);
                    $final['message'] = 'Site updated successfully.';
                    $this->response($final, REST_Controller::HTTP_OK);
                } else {
                    // branch update failed, this should never happen
                    $this->response([
                        'status' => FALSE,
                        'message' => 'There was a problem updating Branch. Please try again',
                        'errors' => [$this->db->error()]
                    ], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
                }
            }
        }
    }

    public function product_delete($id) {
        $this->is_authorized(array('superadmin','branch_admin'));

            $response = $this->product_model->delete($id);

        if ($response) {
            $this->response(['status' => true, 'message' => 'Site deleted successfully.'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['status' => false, 'message' => 'Not deleted'], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    // product end

    public function transfer_stock_list_post() {
        $input_data = file_get_contents('php://input');
        $request_data = json_decode($input_data, true);
    
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
    
        $page = isset($request_data['page']) ? $request_data['page'] : 1; // Default to page 1 if not provided
        $limit = isset($request_data['limit']) ? $request_data['limit'] : 10; // Default limit to 10 if not provided
        $filterData = isset($request_data['filterData']) ? $request_data['filterData'] : [];
    
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $offset = ($page - 1) * $limit;
    
        $totalRecords =  $this->product_model->transfer_stock_get('yes', $id, $limit, $offset, $filterData);
       
        $data =  $this->product_model->transfer_stock_get('no', $id, $limit, $offset, $filterData);
    
        $totalPages = ceil($totalRecords / $limit);
    
        $response = [
            'status' => true,
            'data' => $data,
            'pagination' => [
                'page' => $page,
                'totalPages' => $totalPages,
                'totalRecords' => $totalRecords
            ],
            'message' => 'Site fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }
   


    public function transfer_stock_details_get(){
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $data =  $this->product_model->transfer_stock_show($id);
        $response = [
            'status' => true,
            'data' => $data,
            'message' => 'Site fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }

    public function transfer_stock_post($params='') {
       if($params=='add') {
            $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
            $usersData = json_decode(json_encode($getTokenData), true);
            $session_id = $usersData['data']['id'];
            $_POST = json_decode($this->input->raw_input_stream, true);
           
            // set validation rules
            $this->form_validation->set_rules('branch_id', ' branch Name', 'trim|required|xss_clean|alpha_numeric_spaces');

            if ($this->form_validation->run() === false) {
                $array_error = array_map(function ($val) {
                    return str_replace(array("\r", "\n"), '', strip_tags($val));
                }, array_filter(explode(".", trim(strip_tags(validation_errors())))));

                $this->response([
                    'status' => FALSE,
                    'message' =>'Error in submit form',
                    'errors' =>$array_error
                ], REST_Controller::HTTP_BAD_REQUEST,'','error');
                } else {
                // set variables from the form
				
				
                $data['branch_id'] = $this->input->post('branch_id',TRUE);
                $data['remark'] = $this->input->post('remark',TRUE);


             
                //print_r($product_id);
            

                $data['status'] = 'Pending';
                $data['added'] = date('Y-m-d H:i:s');
                $data['addedBy'] = $session_id;
                $product_ids = $this->input->post('product_id[]');
                $res =  $this->product_model->transfer_stock_create($data);
                if ($res) {


                  if (!empty($product_ids)) {
                        $product_ids_array = explode(',', $product_ids);
                        foreach ($product_ids_array as $product_id) {
                          $data2['product_id'] = $product_id;
                          $data2['stock_transfer_id'] = $res;
                          $data2['status'] = 'Pending';
                          $data2['remarks'] = $this->input->post('remark',TRUE);
                          $this->product_model->transfer_stock_product_create($data2);
                        }
                   }


                    // branch creation ok
                    $final = array();
                    $final['status'] = true;
                    $final['data'] = $this->product_model->transfer_stock_get($res);
                    $final['message'] = 'Site created successfully.';
                    $this->response($final, REST_Controller::HTTP_OK);
                } else {
                    // branch creation failed, this should never happen
                    $this->response([ 'status' => FALSE,
                        'message' =>'Error in submit form',
                        'errors' =>[$this->db->error()]], REST_Controller::HTTP_BAD_REQUEST,'','error');
                }
            }
        }
        // method for updating branch
        if ($params == 'update') {
            $getTokenData = $this->is_authorized('superadmin');
            $usersData = json_decode(json_encode($getTokenData), true);
            $session_id = $usersData['data']['id'];
        
            $_POST = json_decode($this->input->raw_input_stream, true);
        
            // set validation rules
            $this->form_validation->set_rules('name', 'Site Name', 'trim|required|xss_clean|alpha_numeric_spaces');
           
        
            if ($this->form_validation->run() === false) {
                $array_error = array_map(function ($val) {
                    return str_replace(array("\r", "\n"), '', strip_tags($val));
                }, array_filter(explode(".", trim(strip_tags(validation_errors())))));
        
                $this->response([
                    'status' => FALSE,
                    'message' => 'Error in submit form',
                    'errors' => $array_error
                ], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
            } else {
                // set variables from the form
                $name = $this->input->post('name',TRUE);
                if (!empty($name)) {
                    $data['name'] = $name;
                }
                // $city = $this->input->post('city',TRUE);
                // if (!empty($city)) {
                //     $data['city'] = $city;
                // }
				$data['branch_phone'] = $this->input->post('branch_phone',TRUE);
                $data['branch_code'] = $this->input->post('branch_code',TRUE);
				$data['branch_email'] = $this->input->post('branch_email',TRUE);
				$data['branch_address'] = $this->input->post('branch_address',TRUE);
				$data['branch_location'] = $this->input->post('branch_location',TRUE);
                $data['lang'] = $this->input->post('lang',TRUE);
                $data['latt'] = $this->input->post('latt',TRUE);
                $data['country_id'] = $this->input->post('country_id',TRUE);
                $data['state_id'] = $this->input->post('state_id',TRUE);
				$data['city_id'] = $this->input->post('city_id',TRUE);
                $data['area_name'] = $this->input->post('area_name',TRUE);
                $status = $this->input->post('status',TRUE);
                if (!empty($status)) {
                    $data['status'] = $status;
                }
				if(!empty($_POST['branch_image'])){
					$base64_image = $_POST['branch_image'];
					$quality = 90;
					$radioConfig = [
						'resize' => [
						'width' => 500,
						'height' => 300
						]
					 ];
					$uploadFolder = 'branch'; 

					$data['branch_image'] = $this->upload_media->upload_and_save($base64_image, $quality, $radioConfig, $uploadFolder);
					$imgData = $this->db->get_where('blog',array('id'=>$id));
					if($imgData->num_rows()>0){
						$img =  $imgData->row()->branch_image;
						if(file_exists($img) && !empty($img))
						{
							unlink($img);		
						}
					}
				}
                $data['updated_by'] = $session_id;
                $data['updated'] = date('Y-m-d H:i:s');
                $id = $this->input->post('id');
                $res = $this->branch_model->update($data, $id);
        
                if ($res) {
                    // Branch update ok
                    $final = array();
                    $final['status'] = true;
                    $final['data'] = $this->product_model->transfer_stock_get($id);
                    $final['message'] = 'Site updated successfully.';
                    $this->response($final, REST_Controller::HTTP_OK);
                } else {
                    // branch update failed, this should never happen
                    $this->response([
                        'status' => FALSE,
                        'message' => 'There was a problem updating Branch. Please try again',
                        'errors' => [$this->db->error()]
                    ], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
                }
            }
        }
    }

    public function transfer_stock_delete($id) {
        $this->is_authorized(array('superadmin','branch_admin'));

            $response = $this->product_model->transfer_stock_delete($id);

        if ($response) {
            $this->response(['status' => true, 'message' => 'Site deleted successfully.'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['status' => false, 'message' => 'Not deleted'], REST_Controller::HTTP_BAD_REQUEST);
        }
    }





    public function received_stock_list_post() {
        $input_data = file_get_contents('php://input');
        $request_data = json_decode($input_data, true);
    
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
    
        $page = isset($request_data['page']) ? $request_data['page'] : 1; // Default to page 1 if not provided
        $limit = isset($request_data['limit']) ? $request_data['limit'] : 10; // Default limit to 10 if not provided
        $filterData = isset($request_data['filterData']) ? $request_data['filterData'] : [];
    
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $offset = ($page - 1) * $limit;
    
        $totalRecords =  $this->product_model->received_stock_get('yes', $id, $limit, $offset, $filterData);
       
        $data =  $this->product_model->received_stock_get('no', $id, $limit, $offset, $filterData);
    
        $totalPages = ceil($totalRecords / $limit);
    
        $response = [
            'status' => true,
            'data' => $data,
            'pagination' => [
                'page' => $page,
                'totalPages' => $totalPages,
                'totalRecords' => $totalRecords
            ],
            'message' => 'Site fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }
   


    public function received_stock_details_get(){
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $data =  $this->product_model->received_stock_show($id);
        $response = [
            'status' => true,
            'data' => $data,
            'message' => 'Site fetched successfully.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }
 
    
    public function received_stock_post($params = '') {
        if ($params == 'update') {
            // Authorization check
            $getTokenData = $this->is_authorized(array('superadmin', 'branch_admin'));
            $usersData = json_decode(json_encode($getTokenData), true);
            $session_id = $usersData['data']['id'];
        
            // Handle input
            $_POST = json_decode($this->input->raw_input_stream, true);
        
            // Validation rules
            $this->form_validation->set_rules('receiver_remark', 'Receiver Remark', 'trim|required|xss_clean|alpha_numeric_spaces');
            $this->form_validation->set_rules('remark', 'Remark', 'trim|xss_clean');
        
            if ($this->form_validation->run() === false) {
                // Process validation errors
                $array_error = array_map(function ($val) {
                    return str_replace(array("\r", "\n"), '', strip_tags($val));
                }, array_filter(explode(".", trim(strip_tags(validation_errors())))));
        
                // Respond with errors
                $this->response([
                    'status' => FALSE,
                    'message' => 'Error in form submission',
                    'errors' => $array_error
                ], REST_Controller::HTTP_BAD_REQUEST, '', 'error');
            } else {
                // Get form data
                $id = $this->input->post('id', TRUE);
                $receiver_remark = $this->input->post('receiver_remark', TRUE);
                $remarks = $this->input->post('remarks', TRUE);
                $product_id = $this->input->post('product_id', TRUE);
                $status = $this->input->post('status', TRUE);
        
                // Check if all required data is present
                if (empty($id) || empty($receiver_remark) || empty($status)) {
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Missing required fields.',
                        'errors' => ['id', 'receiver_remark', 'status']
                    ], REST_Controller::HTTP_BAD_REQUEST);
                    return;
                }
        
                // Prepare data for update
                $data = [
                    'receiver_remark' => $receiver_remark,
                    'remarks' => $remarks,
                    'product_id' => $product_id,
                    'status' => $status,
                    'status_by' => $session_id,
                    'status_date' => date('Y-m-d H:i:s'),
                ];
        
                // Update product data
                $res = $this->product_modal->update_transfer_product($data, $id);
        
                if ($res) {
                    // Fetch updated product details
                    $final = [
                        'status' => true,
                        'data' => $this->product_modal->transfer_received_stock_get($id),
                        'message' => 'Product updated successfully.'
                    ];
                    $this->response($final, REST_Controller::HTTP_OK);
                } else {
                    // Error in updating
                    $this->response([
                        'status' => FALSE,
                        'message' => 'There was a problem updating the product. Please try again.',
                        'errors' => [$this->db->error()]
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
            }
        }
        
    }
    

   







}



