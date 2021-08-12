   <!--------------------------------------Sales Person-------------------------------->
   <?php

class Auth2 extends CI_Controller
{
    public function logout()
    {  
        unset($_SESSION);
        session_destroy();
        redirect("auth2/saleslogin", "refresh");
    }
public function saleslogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()) {

            $username =$this->input->post('username');
            $password =md5($this->input->post('password'));
            
            $this->load->model('member');
            $login_id=$this->member->isvalidate($username,$password);
            if($login_id && $username)
            {
                $this->load->library('session');
                $this->session->set_userdata('id',$login_id);
                $this->session->set_userdata('username',$username);
                
                
                
                return redirect('members/index');
            }
            else{
                $this->session->set_flashdata('Login_Failed','Invalid Username / Password');
                return redirect('Auth2/saleslogin');
                }
        }
        else{
     $this->load->view('saleslogin');
        }
    }

    /*     $this->db->select('*');
            $this->db->from('salesusers');
            $this->db->where(array('username' => $username, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();

            if($user->username) {
             
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;
            
                redirect("members/index", "refresh");
            }
            else
            {
                
                $this->session->set_flashdata('error', 'No such Account exists!! Please try again with valid username');
                
				redirect("auth2/saleslogin", "refresh");
            }
        }
       
       
        $this->load->view('saleslogin');
    }
*/
    public function salesregister()
    {
        if (isset($_POST['salesregister'])) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
        //  $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required');
        //    $this->form_validation->set_rules('password', 'Confirm Password', 'required|matches[password]');           
       //     $this->form_validation->set_rules('designation', 'Designation', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9]{10}$/]');
            //true
            if($this->form_validation->run() == TRUE) {
                echo 'Successfully Registered!! Now you can Login with your ';
            
                $data = array(
                    'name'=>$_POST['name'],
                    'username'=>$_POST['username'],
       //             'email'=>$_POST['email'],
                    'password'=>md5($_POST['password']),
       //             'designation'=>$_POST['designation'],
                    'phone'=>$_POST['phone']
     );
            $this->db->insert('salesusers',$data);
            $this->session->set_flashdata("success", "Your account has been registered. You can login now.");
                redirect("auth2/salesregister", "refresh");

            }

        }

    $this->load->view('salesregister');
    
    }
}