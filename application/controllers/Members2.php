<?php
date_default_timezone_set("Asia/Kolkata");
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members2 extends CI_Controller {
    public function __construct() {
        parent::__construct();

        // Load member model
        $this->load->model('member2');

        // Load form helper and library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Load pagination library
        $this->load->library('pagination');

        // Per page limit
        $this->perPage = 3;
    }
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect("auth/adminlogin", "refresh");
    }
    public function index3()
      {
         //load the method of model
         $data['h']=$this->member2->select();
         //return the data in view
         $this->load->view('header', $data);
         $this->load->view('select_view', $data);
         $this->load->view('footer');
      }
      public function delete2($id){
        // Check whether member id is not empty
        if($id){
            // Delete member
            $delete = $this->member2->delete2($id);
            if($delete){
                $this->session->set_userdata('success_msg', 'User has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occured, please try again.');
            }

        }

        // Redirect to the list page
        redirect('members2/index3');
    }


    public function index(){
        if($_SESSION['user_logged'] == FALSE){
            $this->session->set_flashdata("error", "please login first");
              redirect('auth/adminlogin');}

        $data = array();

        // Get messages from the session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');

        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');

        }

        // If search request submitted
        if($this->input->post('submitSearch2')){
            $inputKeywords2 = $this->input->post('searchKeyword2');

            $searchKeyword2 = strip_tags($inputKeywords2);

            if(!empty($searchKeyword2)){
                $this->session->set_userdata('searchKeyword2',$searchKeyword2);

            }else{
                $this->session->unset_userdata('searchKeyword2');

            }
        }elseif($this->input->post('submitSearchReset2')){
            $this->session->unset_userdata('searchKeyword2');

        }
        $data['searchKeyword2'] = $this->session->userdata('searchKeyword2');

        // Get rows count
        $conditions['searchKeyword2'] = $data['searchKeyword2'];

        $conditions['returnType']    = 'count';

        $rowsCount = $this->member2->getRows($conditions);


        // Pagination config
        $config['base_url']    = base_url().'index.php/members2/index/';
        $config['uri_segment'] = 3;
        $config['total_rows']  = $rowsCount;
        $config['per_page']    = $this->perPage;

        // Initialize pagination library
        $this->pagination->initialize($config);

        // Define offset
        $page = $this->uri->segment(3);
        $offset = !$page?0:$page;

        // Get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        $data['members'] = $this->member2->getRows($conditions);
        $data['title'] = 'Members List';


        // Load the list page view
        $this->load->view('header', $data);
        $this->load->view('index2', $data);
        $this->load->view('footer');
    }

    public function view($id){
        $data = array();

        // Check whether member id is not empty
        if(!empty($id)){
            $data['member2'] = $this->member2->getRows(array('id' => $id));
            $data['title']  = 'Member Details';

            // Load the details page view
            $this->load->view('header', $data);
            $this->load->view('view', $data);
            $this->load->view('footer');
        }else{
            redirect('members');
        }
    }

    public function add(){
        $data = array();
        $memData = array();

        // If add request is submitted
        if($this->input->post('memSubmit')){
            // Form field validation rules
            $this->form_validation->set_rules('clientname', 'clientname', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('contact_no', 'contact_no', 'required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('review', 'review', 'required');
            $this->form_validation->set_rules('sales_name', 'sales_name', 'required');
            $this->form_validation->set_rules('datetimepicker', 'datetimepicker', 'required');



            // Prepare member data
            $memData = array(
                'clientname'=> $this->input->post('clientname'),
                'address' => $this->input->post('address'),
                'contact_no'     => $this->input->post('contact_no'),
                'review'    => $this->input->post('review'),
                'sales_name'   => $this->input->post('sales_name'),
                'date'=>date('Y-m-d H:i:s'),
                'feedback'   => $this->input->post('feedback'),
                'created'=>date('Y-m-d H:i:s'),
                'datetimepicker'   => $this->input->post('datetimepicker'),
                'user_id'   => $this->input->post('user_id')
 );

            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Insert member data
                $insert = $this->member2->insert($memData);

                if($insert){
                    $this->session->set_userdata('success_msg', 'Member has been added successfully.');
                    redirect('members2');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                    redirect('members2/add');
                }
            }
        }

        $data['member2'] = $memData;
        $data['title'] = 'Add Member';

        // Load the add page view
        $this->load->view('header', $data);
        $this->load->view('adminaddedit', $data);
        $this->load->view('footer');
    }

    public function edit($id){
        $data = array();

        // Get member data
        $memData = $this->member2->getRows(array('id' => $id));

        // If update request is submitted
        if($this->input->post('memSubmit')){
            // Form field validation rules

            $this->form_validation->set_rules('clientname', 'clientname', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('contact_no', 'contact_no', 'required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('review', 'review', 'required');
            $this->form_validation->set_rules('sales_name', 'sales_name', 'required');
            $this->form_validation->set_rules('datetimepicker', 'datetimepicker', 'required');

            // Prepare member data
            $memData = array(
                'clientname'=> $this->input->post('clientname'),
                'address' => $this->input->post('address'),
                'contact_no'     => $this->input->post('contact_no'),
                'review'    => $this->input->post('review'),
                'sales_name'   => $this->input->post('sales_name'),
                'date'=>date('Y-m-d H:i:s'),
                'feedback'   => $this->input->post('feedback'),
                'created'=>date('Y-m-d H:i:s'),
                'datetimepicker'   => $this->input->post('datetimepicker')
            );

            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Update member data
                $update = $this->member2->update($memData, $id);

                if($update){
                    $this->session->set_userdata('success_msg', 'Member has been updated successfully.');
                    redirect('members2');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                    redirect('members2/edit');
                }
            }
        }

        $data['member'] = $memData;
        $data['title'] = 'Update Member';

        // Load the edit page view
        $this->load->view('header', $data);
        $this->load->view('adminaddedit', $data);
        $this->load->view('footer');
    }

    public function delete($id){
        // Check whether member id is not empty
        if($id){
            // Delete member
            $delete = $this->member2->delete($id);

            if($delete){
                $this->session->set_userdata('success_msg', 'Member has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occured, please try again.');
            }
        }

        // Redirect to the list page
        redirect('members2');
    }
}
