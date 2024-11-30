<?php
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Group extends REST_Controller {

    public function __construct() {
        $this->cors_header();
        parent::__construct();
        $this->load->model('group_model'); 
        $this->load->helper('security');
    }

    public function add_group_post($params='') {
        if($params=='add') {
            $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
            $usersData = json_decode(json_encode($getTokenData), true);
            $session_id = $usersData['data']['id'];
            $_POST = json_decode($this->input->raw_input_stream, true);
            // print_r ($getTokenData);
            // exit();
            // set validation rules
            $this->form_validation->set_rules('group_name', 'Name', 'trim|required|xss_clean|alpha_numeric|min_length[3]');
            $this->form_validation->set_rules('group_code', 'Code', 'trim|required|xss_clean|alpha_numeric|min_length[3]');
        
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
                  $data['group_name'] = $this->input->post('group_name',TRUE);
                  $data['group_code'] = $this->input->post('group_code',TRUE);
                  $data['group_location'] = $this->input->post('group_location',TRUE);
                  $data['group_address'] = $this->input->post('group_address',TRUE);
                  $data['group_leader-name'] = $this->input->post('group_leader-name',TRUE);
                  $data['city'] = $this->input->post('city',TRUE);
                  $data['country'] = $this->input->post('country',TRUE);
                  $data['state'] = $this->input->post('state',TRUE);
                  
                  
                  if(!empty($_POST['image'])){
                      $base64_image = $_POST['image'];
                      $quality = 90;
                      $radiusConfig = [
                          'resize' => [
                          'width' => 500,
                          'height' => 300
                          ]
                       ];
                      $uploadFolder = 'groups'; 
      
                      $data['image'] = $this->upload_media->upload_and_save($base64_image, $quality, $radiusConfig, $uploadFolder);
                      
                  }
                $data['status'] = 'Active';
                $data['added'] = date('Y-m-d H:i:s');
                $data['addedBy'] = $session_id;
                
                if ($res = $this->group_model->create($data)) {
                    // branch creation ok
                    $final = array();
                    $final['status'] = true;
                    $final['data'] = $this->group_model->get($res);
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
            $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
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
                    $final['data'] = $this->branch_model->get($id);
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
    public function group_list_post($role = '') {
        // Input data
        $input_data = file_get_contents('php://input');
        $request_data = json_decode($input_data, true);
    
        // Parameters
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
        $role = !empty($role) ? $role : (isset($request_data['user_type']) ? $request_data['user_type'] : '');
    
        $page = isset($request_data['page']) ? $request_data['page'] : 1; // Default to page 1
        $limit = isset($request_data['limit']) ? $request_data['limit'] : 10; // Default limit to 10
        $filterData = isset($request_data['filterData']) ? $request_data['filterData'] : [];
    
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $offset = ($page - 1) * $limit;
    
        // Fetch total records for pagination
        $totalRecords = $this->group_model->get('yes', $id, $limit, $offset, $filterData, $role);
        if (is_array($totalRecords)) {
            $totalRecords = count($totalRecords); // Use count() to get the number of records
        }
        // Fetch paginated data
        $data = $this->group_model->get('no', $id, $limit, $offset, $filterData, $role);
    
        // Total pages calculation
        $totalPages = ceil($totalRecords / $limit);
    
        // Build response
        $response = [
            'status' => true,
            'data' => $data,
            'pagination' => [
                'page' => $page,
                'totalPages' => $totalPages,
                'totalRecords' => $totalRecords
            ],
            'message' => 'Usuario de la empresa obtenido correctamente.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }
   

  
    public function group_details_get(){
        $id = $this->input->get('id') ? $this->input->get('id') : 0;
        $getTokenData = $this->is_authorized(array('superadmin','branch_admin'));
        $data =  $this->group_model->show($id);
        $response = [
            'status' => true,
            'data' => $data,
            'message' => 'El usuario de la empresa fetched correctamente.'
        ];
        $this->response($response, REST_Controller::HTTP_OK); 
    }

    public function group_delete($id) {
         $this->is_authorized(array('superadmin','branch_admin'));
        $response = $this->group_model->delete($id);
    
        if ($response) {
            $this->response(['status' => true, 'message' => 'regular user deleted successfully.'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['status' => false, 'message' => 'Not deleted'], REST_Controller::HTTP_BAD_REQUEST);
        }
    }





















}
?>