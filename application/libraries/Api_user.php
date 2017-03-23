<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_user {

        public function user_auth($email,$password)
        {
        	
        	$data = array(
				'email' => $email,
			    'password' => $password,
			);
			$data_string = json_encode($data);

			$ch = curl_init('http://backend.nidoo.co/api/v1/auth');
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
			
			$obj = json_decode($result,true);
			//echo var_dump($obj);
			//echo var_dump($obj['error']);
			echo $obj['error']['status_code'];
			echo $obj['error']['message'];

			// do anything you want with your response
			//return $result;
			#return $obj['error'][0]['status_code'];
        }

        public function user_create($data){

        	$ch = curl_init('http://backend.nidoo.co/api/v1/user');
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			    'Content-Type: application/json',
			    'Content-Length: ' . strlen($data))
			);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

			//execute post
			$result = curl_exec($ch);

			//close connection
			curl_close($ch);

			//echo $result;

			$obj = json_decode($result,true);
			//echo var_dump($obj);
			//echo var_dump($obj['error']);
			//echo $obj['error']['status_code'];
			//echo $obj['error']['message'];
			if ($obj['error']['status_code']<>400) {
				return true;
			}else{
				return false;
			}


        }
        
}