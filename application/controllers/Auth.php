   <!--------------------------------------Sales Person-------------------------------->
   <?php

class Auth extends CI_Controller
{
    public function logout()
    {  
        unset($_SESSION);
        session_destroy();
        redirect("auth/adminlogin", "refresh");
    }
    
    public function adminlogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == TRUE) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where(array('username' => $username, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();

            if($user->username) {
             
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;
            
                redirect("members2/index", "refresh");
            }
            else
            {   
                $this->session->set_flashdata('error', 'No such Account exists!! Please try again with valid username');
                
				redirect("auth/adminlogin", "refresh");
            }
        }
        $this->load->view('adminlogin');
    }
}