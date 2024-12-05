<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    protected $table      = 'products'; // Make sure to change 'branch' to the actual table name for the Branch entity.
    protected $primaryKey = 'id';

    protected $table2      = 'stock_transfer'; // Make sure to change 'branch' to the actual table name for the Branch entity.
    protected $primaryKey2 = 'id';

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();        
    }

    public function create($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id(); 
    }

    public function show($id) {
        $this->db->select("*");
        $this->db->from($this->table);
        if(!empty($id)) {
            $this->db->where($this->primaryKey, $id);
        }
        return $this->db->get()->result();
    }

    public function update($data, $id) {
        $response = $this->db->update($this->table, $data, array($this->primaryKey=>$id));
        return $this->db->affected_rows();
    }

    public function delete($id) {
        $this->db->delete($this->table, array($this->primaryKey=>$id));
        return $this->db->affected_rows();
    }

   
		public function get($isCount = '',$id='',$limit='',$page = '',$filterData='') {
			
			$this->db->select("*");
			$this->db->from($this->table);
		   
			
			if(!empty($id)) {
				$this->db->where($this->primaryKey, $id);
			}
			
			if(isset($filterData['name']) && !empty($filterData['name'])){
				$this->db->like('name', $filterData['name']);
			}
		
			if(isset($filterData['status']) && !empty($filterData['status'])){
				$this->db->where('status', $filterData['status']);
			}
			
			$this->db->order_by($this->primaryKey, 'desc');
			
			
			if($isCount=='yes'){
			$all_res = $this->db->get();
			return $all_res->num_rows();
				
		   }
		   else{
			$this->db->limit($limit, $page);
			return $this->db->get()->result();
		   }
		} 

        public function transfer_stock_create($data) {
            $this->db->insert($this->table2, $data);
            return $this->db->insert_id(); 
        }
       
        public function transfer_stock_product_create($data) {
            $this->db->insert('transfer_product', $data);
            return $this->db->insert_id(); 
        }

        public function transfer_stock_show($id) {
            $this->db->select("*");
            $this->db->from($this->table2);
            if(!empty($id)) {
                $this->db->where($this->primaryKey2, $id);
            }
            return $this->db->get()->result();
        }
    
        public function transfer_stock_update($data, $id) {
            $response = $this->db->update($this->table2, $data, array($this->primaryKey2=>$id));
            return $this->db->affected_rows();
        }
    
        public function transfer_stock_delete($id) {
            $this->db->delete($this->table2, array($this->primaryKey2=>$id));
            return $this->db->affected_rows();
        }
    
       
    public function transfer_stock_get($isCount = '',$id='',$limit='',$page = '',$filterData='') {
                
        $this->db->select("$this->table2.*, branch.name as branch_name, COUNT(transfer_product.id) as transfer_product_count");
        $this->db->from($this->table2);
        $this->db->join('branch', "branch.id = $this->table2.branch_id", 'left');
        $this->db->join('transfer_product', 'transfer_product.stock_transfer_id = ' . $this->table2 . '.id', 'left');
        
        $this->db->group_by($this->table2 . '.id'); 
        
     
        
                if(!empty($id)) {
                    $this->db->where($this->primaryKey2, $id);
                }
                
                if(isset($filterData['branch_id']) && !empty($filterData['branch_id'])){
                    $this->db->like('branch_id', $filterData['branch_id']);
                }
            
                if(isset($filterData['status']) && !empty($filterData['status'])){
                    $this->db->where('status', $filterData['status']);
                }
                
                $this->db->order_by($this->primaryKey2, 'desc');
                
                
                if($isCount=='yes'){
                $all_res = $this->db->get();
                return $all_res->num_rows();
                    
               }
               else{
                $this->db->limit($limit, $page);
                return $this->db->get()->result();
               }
            } 

            public function received_stock_show($id) {
                $this->db->select("*");
                $this->db->from($this->table2);
                if(!empty($id)) {
                    $this->db->where($this->primaryKey2, $id);
                }
                return $this->db->get()->result();
            }


            public function received_stock_get($isCount = '',$id='',$limit='',$page = '',$filterData='') {
                
                $this->db->select("$this->table2.*, branch.name as branch_name, COUNT(transfer_product.id) as transfer_product_count");
                $this->db->from($this->table2);
                $this->db->join('branch', "branch.id = $this->table2.branch_id", 'left');
                $this->db->join('transfer_product', 'transfer_product.stock_transfer_id = ' . $this->table2 . '.id', 'left');
                
                $this->db->group_by($this->table2 . '.id'); 
                
             
                
                        if(!empty($id)) { 
                            $this->db->where($this->primaryKey2, $id);
                        }
                        
                        if(isset($filterData['branch_id']) && !empty($filterData['branch_id'])){
                            $this->db->like('branch_id', $filterData['branch_id']);
                        }
                    
                        if(isset($filterData['status']) && !empty($filterData['status'])){
                            $this->db->where('status', $filterData['status']);
                        }
                        
                        $this->db->order_by($this->primaryKey2, 'desc');
                        
                        
                        if($isCount=='yes'){
                        $all_res = $this->db->get();
                        return $all_res->num_rows();
                            
                       }
                       else{
                        $this->db->limit($limit, $page);
                        return $this->db->get()->result();
                       }
                    } 


                public function update_transfer_product($data, $id) {
                        $response = $this->db->update('transfer_product', $data, array('id' => $id)); // 'id' is the primary key
                        return $this->db->affected_rows();
                    }
                    

                    public function transfer_received_stock_get($isCount = '', $id = '', $limit = '', $page = '', $filterData = '') {
                        // Select all columns from the transfer_product table
                        $this->db->select('*');
                        $this->db->from('transfer_product');
                        
                        // Apply filters if any
                        if (!empty($id)) {
                            $this->db->where('id', $id); // Filter by ID if provided
                        }
                    
                        if (isset($filterData['status']) && !empty($filterData['status'])) {
                            $this->db->where('status', $filterData['status']); // Filter by status if provided
                        }
                    
                        if (isset($filterData['branch_id']) && !empty($filterData['branch_id'])) {
                            $this->db->like('branch_id', $filterData['branch_id']); // Filter by branch_id if provided
                        }
                    
                        // If it's for counting rows, return the count
                        if ($isCount == 'yes') {
                            $all_res = $this->db->get();
                            return $all_res->num_rows(); // Return the number of rows
                        } else {
                            // Apply pagination: limit the results and return the rows
                            $this->db->limit($limit, $page);
                            return $this->db->get()->result(); // Return the result
                        }
                    }
                    
        

        }







	
	
  

