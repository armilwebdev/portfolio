<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('image_lib');
	}

	public function index(){
        $this->load->library('phpmailer_lib');
		$mail = $this->phpmailer_lib->load();

		if(isset($_POST['submit'])){
	echo	$contact_name 		= 	$this->input->post('contact_name', TRUE);
	echo	$contact_email 		=	$this->input->post('contact_email', TRUE);
	echo	$contact_message	=	$this->input->post('contact_message', TRUE);


	// MAILING
	$from = "contact_message@armilwebdev.com";
	$my_email = "armilwebdev@gmail.com";
	$to = $my_email;
	$from = $from;
	$subject = "ARMIL WEBDEV, You've been contacted by: $contact_name";
	$message = "
	<html>
	<head>
	<title>Contact Message</title>
	</head>
	<body>
	<p><b>Armil,</b><br>
	<br>
	".$contact_message."
		<br>
		<br>
		".$contact_name."<br>
		Contact Guest At: <br>".$contact_email."<br>
	</p>
	</body>
	</html>
	";
	$mail->addAddress($to);
	$mail->setFrom($from);
	$mail->Subject = $subject;
	$mail->isHTML(true);
	$mail->Body = $message;
	$mail->send();
	$mail->ClearAllRecipients();

	redirect('main/contact_success');
		}

		$this->load->view('includes/header');
		$this->load->view('includes/sidemenu');
		$this->load->view('index');
		$this->load->view('includes/footer');
		

	}

	public function contact_success(){
		header('Refresh:4; url= '. base_url()); 

		$this->load->view('includes/header');
		$this->load->view('contact_success');
		$this->load->view('includes/footer');
	}

}
