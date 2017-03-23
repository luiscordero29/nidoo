<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		
		#$this->load->driver('session');

		/* Control de Sessión
		if(!$this->session->has_userdata('id_usuario'))
		{
		    redirect('account/logout');
		}*/
		
	}

	public function index()
	{
        $this->load->view('site/index');
	}

	public function home()
	{
        $this->load->view('site/home');
	}

	public function login()
	{
        # rules
		$this->form_validation->set_rules('email', 'Dirección de correo electrónico', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Contraseña', 'required|callback_check_session');
		# message
		$this->form_validation->set_message('check_session', 'Sin acceso');
		if ($this->form_validation->run() == FALSE)
		{
        	$this->load->view('site/login');
		}else{			
	        redirect('site/home', 'refresh');	     
		}
	}

	public function register()
	{
        # rules
		$this->form_validation->set_rules('email', 'Dirección de correo electrónico', 'required|valid_email|trim');
		$this->form_validation->set_rules('name', 'Nombres', 'required|trim');
		$this->form_validation->set_rules('lastname', 'Apellidos', 'required|trim');
		$this->form_validation->set_rules('company', 'Empresa', 'required|trim');
		$this->form_validation->set_rules('document_type_id', 'Tipo de Documento', 'required|trim');
		$this->form_validation->set_rules('document_number', 'Número de Documento', 'required|trim');
		$this->form_validation->set_rules('phone', 'Télefono', 'required|trim');
		$this->form_validation->set_rules('mobile_phone', 'Télefono Movil', 'required|trim');
		$this->form_validation->set_rules('password', 'Contraseña', 'required|callback_api_user_create');
		# message
		$this->form_validation->set_message('api_user_create', 'Error al registrarse');
		if ($this->form_validation->run() == FALSE)
		{
        	$this->load->view('site/register');
		}else{		
			$data['alert']['success'] = 
			array( 
				'Registrado Correctamente',				
			);
	        $this->load->view('site/register',$data);  
		}
	}

	public function check_session()
	{
	    $email = $this->input->post('email');
	    $password = $this->input->post('password');
	    $email = 'info@luiscordero29.com';
	    $password = 'gabriel02';
	    $this->load->library('api_user');
	    $result = $this->api_user->user_auth($email,$password);
	    echo $result;
	    /*
	    if($result)
	    { 
		    /*$sess_array = array(
		        'rus_id' 		=> $result['rus_id'],
		        'rus_tipo' 		=> $result['rus_tipo'],	
		    );
		    
	        $this->session->set_userdata($sess_array);
	      	return true;
	    }else{
	      	return false;
	    }
	    */
	}

	public function api_user_create()
	{
		
		$data = array(
				'email' 					=> $this->input->post('email'),
		    	'password' 					=> $this->input->post('password'),
		    	'name' 						=> $this->input->post('name'),
		    	'lastname' 					=> $this->input->post('lastname'),
		    	'company' 					=> $this->input->post('company'),
		    	'document_number' 			=> $this->input->post('document_number'),
		    	'mobile_phone' 				=> $this->input->post('mobile_phone'),
		    	'phone' 					=> $this->input->post('phone'),
		    	'document_type_id' 			=> $this->input->post('document_type_id'),
		    	'document_image_path' 		=> $this->input->post('document_image_path'),
		    	'profile_image_path' 		=> $this->input->post('profile_image_path'),
		    	'agree_terms_conditions' 	=> $this->input->post('agree_terms_conditions'),
			);
		$data_string = json_encode($data);

		$this->load->library('api_user');

	    return $this->api_user->user_create($data_string);
		
	}
	
	public function insert()
	{
		// set post fields
		/*$post = [
		    'email' => 'info@luiscordero29.com',
		    'password' => 'gabriel02',
		];

		$ch = curl_init('http://backend.nidoo.co/api/v1/auth');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

		// execute!
		$response = curl_exec($ch);

		// close the connection, release resources used
		curl_close($ch);

		// do anything you want with your response
		var_dump($response);
		*/
		$data = array(
				'email' => 'luis.cordeo@webdiv.co',
		    	'password' => 'gabriel02',
		    	'name' => 'luis',
		    	'lastname' => 'cordero',
		    	'company' => 'luiscordero29',
		    	'document_number' => '18118222',
		    	'mobile_phone' => '04143735483',
		    	'phone' => '04143735483',
		    	'document_type_id' => '16c46c36-953f-483d-92a6-84488d080eab',
		    	'document_image_path' => '',
		    	'profile_image_path' => '',
		    	'agree_terms_conditions' => 'fe53b237-160f-4d07-b132-195c5a67840a',
			);
		$data_string = json_encode($data);


		$ch = curl_init('http://backend.nidoo.co/api/v1/user');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($data_string))
		);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

		//execute post
		$result = curl_exec($ch);

		//close connection
		curl_close($ch);

		echo $result;
		
	}
}
