<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group_model extends CI_Model {

    protected $table = 'groups'; // Define the table name
    protected $primaryKey = 'id'; // Define the primary key

    public function __construct() {
        parent::__construct();
        $this->load->database();        
    }

    /**
     * Insert new record in the database
     */
    public function create($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id(); 
    }

    /**
     * Retrieve a record or all records
     */
    public function show($id = '') {
        $this->db->select("*");
        $this->db->from($this->table);
        if (!empty($id)) {
            $this->db->where($this->primaryKey, $id);
        }
        return $this->db->get()->result();
    }

    /**
     * Update a record by ID
     */
    public function update($data, $id) {
        $this->db->where($this->primaryKey, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    /**
     * Delete a record by ID
     */
    public function delete($id) {
        $this->db->where($this->primaryKey, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    /**
     * Retrieve filtered group data with optional pagination and count
     */
    public function get($id='',$filterData='') {
        $this->db->select("*");
        $this->db->from($this->table);
        if(!empty($id)) {
            $this->db->where($this->primaryKey, $id);
        }
		if(isset($filterData['group_name']) && !empty($filterData['group_name'])){
			$this->db->where('group_name',$filterData['group_name']);
		}
		if(isset($filterData['status'])){
			$this->db->where('status',$filterData['status']);
		}
       
        if($isCount=='yes'){
            $all_res = $this->db->get();
            return $all_res->num_rows();
                
           }
           else{
            $this->db->limit($limit, $page);
            return $this->db->get()->result();
           }
    }
}
