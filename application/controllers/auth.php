<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

	function __construct()
    {
        parent::__construct();
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="span-6 last error clear">', '</div>');
	}
	
	public function signin()
	{
        // User submitted signin form
        if ($_POST)
        {
            // Validate form            
            $validation_array = array(
                array(
                    'field' => 'email_address',
                    'label' => 'Email Address',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required'
                )
            );
            
            $this->form_validation->set_rules($validation_array);
           
            if ($this->form_validation->run() == FALSE)
            {
                // Validation failed 
                $this->load->view('auth/signin');
            }
            else {
                // Validated correctly
                
                // Attempt to sign user in
                $user = User::validate_signin($_POST['email_address'], $_POST['password']);
                
                if ($user)
                {
                    // User signed in successfully
                    redirect('');
                }
                else
                {
                    // User failed to sign in
                    $data['errors'] = "<div class='span-6 last error clear'>Login Failed</div>";
					$this->load->view('auth/signin', $data);
                }
            }
        }
        
        else
            $this->load->view('auth/signin');
	}
	
	public function signout()
	{
		User::signout();
		redirect('');
	}
	
	public function signup()
	{
		if ($_POST) {
			// Validate form
			$validation_array = array(
				array(
					'field' => 'email_address',
					'label' => 'Email Address',
					'rules' => 'trim|required|valid_email|is_unique(users.email_address)|xss_clean'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required|min_length[4]|max_length[16]|matches[password_confirm]'
				),
				array(
					'field' => 'password_confirm',
					'label' => 'Password Confirm',
					'rules' => 'trim|required'
				)
			);
			
			$this->form_validation->set_rules($validation_array);
			if ($this->form_validation->run() == FALSE)
			{
				// Validation failed 
				$this->load->view('auth/signup');
			}
			else {
				// Validated correctly
				
				$user = User::create(
					array(
						'email_address' => $_POST['email_address'],
						'password' => $_POST['password']
					)
				);
				
				User::signin($user->id);
				redirect('');
			}
		}
		else {
			$this->load->view('auth/signup');
		}
	}
	
	public function settings()
	{
		if ($_POST) {
			// Form has been filled out!
			$settype = $_POST['settype'];
			// What setting are we updating?
			if ($settype == 1)
			{
				
			}
			
			elseif ($settype == 2)
			{
				
			}
			
			elseif ($settype == 3)
			{
				
			}
			
			elseif ($settype == 4)
			{
				
			}
			
			else
			{
				$this->load->view('auth/settings');
			}
		}
		else {
			
			$uriseg = $this->uri->segment(3, "front");
			
			switch ($uriseg)
			{
				case "front":
					$this->load->view('auth/settings');
					break;
				case "password":
					$this->load->view('auth/settings-password');
					break;
				case "email":
					$this->load->view('auth/settings-email');
					break;
				case "social":
					$this->load->view('auth/settings-social');
					break;
			}
		}
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
