<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Model{

    public function isvalidate($username,$password)
        {
            $q=$this->db->where(['username'=>$username,'password'=>$password])
                        ->get('salesusers');
                        /* echo "<pre>";
                        print_r($q->row()->id);
                        exit;*/
                     if($q->num_rows())
                     {
                        /*
                        $id=$q->row();
                        return $id->id;
                        */
                         return $q->row()->id;
                     }
                     else{
                        return false;
                     }
            
                     }
         /*
                        public function articleList(){
                            $id=$this->session->userdata('id');
                            $q=$this->db->select('')
                                        ->from('members')
                                        ->where(['user_id'=>$id])
                                        ->get();
                            return $q->result();
                            
                        }
                        */
        function __construct() {
            parent::__construct();
            // Set table name
            $this->table = 'members';
        }
        
        /*
         * Fetch members data from the database
         * @param array filter data based on the passed parameters
         */
        function getRows($params = array()){
            $id=$this->session->userdata('id');
            $this->db->select('');
            $this->db->from($this->table);
            $this->db->where(['user_id'=>$id]);
            
            if(array_key_exists("conditions", $params)){
                foreach($params['conditions'] as $key => $val){
                    $this->db->where($key, $val);
            
                }
            }
            
            if(!empty($params['searchKeyword'])){
                $search = $params['searchKeyword'];
                
                $likeArr = array('id' => $search, 'clientname' => $search, 'sales_name' => $search, 'contact_no' => $search, 'feedback' => $search);
                $this->db->or_like($likeArr);
            
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            
            }else{
                if(array_key_exists("id", $params)){
                    $this->db->where('id', $params['id']);
                    $query = $this->db->get();
                  //  echo "<pre>";print_r($query);exit;
                    $result = $query->row_array();
            
                    
                }else{
                    $this->db->order_by('date', 'DESC');
            
                    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                        $this->db->limit($params['limit'],$params['start']);
            
                    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                       $this->db->limit($params['limit']);
            
                    }
                    
                    $query = $this->db->get();
            
                    $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            
                }
            }
            
            // Return fetched data
            return $result;
            
            
        }
    
    /*
     * Insert members data into the database
     * @param $data data to be insert based on the passed parameters
     */
    public function insert($data = array()) {
        if(!empty($data)){
            // Add created and modified date if not included
            if(!array_key_exists("created", $data)){
                $data['created'] = date("Y-m-d H:i:s");
            }
            if(!array_key_exists("modified", $data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            

             #function save_data($student_data){
             #   $this->db->insert('student_db', $student_data);
              #  $insert_id = $this->db->insert_id();
               # return $insert_id;

            // Insert member data
            $insert = $this->db->insert($this->table, $data);
             
            // Return the status
            $insert_id = $this->db->insert_id();
            #return $insert?$this->db->insert_id():false;
        }
        #return false;
        return $insert_id;
    }
    
    /*
     * Update member data into the database
     * @param $data array to be update based on the passed parameters
     * @param $id num filter data
     */
    public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            // Add modified date if not included
            if(!array_key_exists("modified", $data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            
            // Update member data
            $update = $this->db->update($this->table, $data, array('id' => $id));
            
            // Return the status
            return $update?true:false;
        }
        return false;
    }
    
    /*
     * Delete member data from the database
     * @param num filter data based on the passed parameter
     */
    public function delete($id){
        // Delete member data
        $delete = $this->db->delete($this->table, array('id' => $id));
        
        // Return the status
        return $delete?true:false;
    }
}