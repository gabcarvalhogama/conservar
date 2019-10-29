<?php

	// Add menu support
	if ( function_exists( 'register_nav_menu' ) ) 
		register_nav_menu('main-menu', 'Menu Principal' );
	add_theme_support( 'post-thumbnails' );

	// Add Custom Logo
	$args = array(
        'default-image' => get_template_directory_uri() . '/images/logo.png',
        'uploads' => true
    );
    add_theme_support( 'custom-logo', $args );
    function get_custom_logo_url(){
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        return (esc_url( $logo[0] ) != null) ?  : get_template_directory_uri() . '/images/logo.png';
    }



    $defaults = array(
		'default-image'          => get_template_directory_uri() . '/images/highlight-default.png',
		'width'                  => 1920,
		'height'                 => 1080,
		'flex-height'            => false,
		'flex-width'             => false,
		'uploads'                => true
	);
	add_theme_support( 'custom-header', $defaults );


	
	function get_opengraph(){

	}


	function get_reviews(){
		
		$cURLConnection = curl_init();

		curl_setopt($cURLConnection, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyDR87QeCumghgKIzTmuawR2DjlGE51XReg&fields=reviews&place_id=ChIJtWIewAUZtgARM2TNWI5EAug');
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

		$reviewsList = curl_exec($cURLConnection);
		curl_close($cURLConnection);

		$jsonArrayResponse = json_decode($reviewsList);

		return $jsonArrayResponse;
	}




	//response generation function
    $response = "";
 
    //function to generate response
    function my_contact_form_generate_response($type, $message){
        global $response;
        $response = ($type == "success") ?  "<div class='alert alert-success'>{$message}</div>" : "<div class='alert alert-danger'>{$message}</div>";
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cellphone = $_POST['cellphone'];
    $subjectF = $_POST['subject'];
    $submitted = $_POST["submitted"];
    //php mailer variables
    $to = get_option('admin_email');
    $subjectMail = "Alguém enviou mensagem de ".get_bloginfo('name');
    $headers = array(
        'From: '. $email,
        'Reply-To: ' . $email,
        'Content-Type: text/html',
        'charset=UTF-8'
    );
    if($submitted){
        if(empty($name)){
            my_contact_form_generate_response("error", "Você não disse o seu nome!");
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            my_contact_form_generate_response("error", "Parece que esse e-mail não é válido!");
        }else if(empty($cellphone)){
            my_contact_form_generate_response("error", "Você não disse o seu número de celular!");
        }else if(empty($subjectF)){
            my_contact_form_generate_response("error", "Deixe uma mensagem para nós!");
        }else{
            $html = '<body style="background-color:#f5f5f5; padding: 30px;">
              <div class="box" style="width: 70%; background-color: #fff; text-align: center; padding: 50px 0; margin: 0 auto;box-shadow: 1px 1px 4px rgba(0,0,0,.05); border-radius: 4px;">
                <img src="http://conservar.maxdd.com.br/wp-content/themes/conservar/images/logo.png" alt="Conservar" style="height: 100px;"/>
                <h2 style="text-align: center; margin: 20px auto;font-size: 1.3rem;font-family: \'Roboto Light\';">Formulário de Contato - Conservar</h2>
                <div class="content" style="padding: 0 50px;text-align: left;">
                  <p><strong>Nome: </strong>'.$name.'</p>
                  <p><strong>E-mail: </strong>'.$email.'</p>
                  <p><strong>Celular: </strong>'.$cellphone.'</p>
                  <p><strong>Sobre o que quer falar: </strong>'.$subjectF.'</p>
                </div>
              </div>
            </body>';
            $sent = wp_mail($to, $subjectMail, $html, $headers);
            if($sent) my_contact_form_generate_response("success", "Contato enviado com sucesso!");
            else my_contact_form_generate_response("error", "Parece que algo deu errado. Verifique os dados e tente novamente!");
        }
    }