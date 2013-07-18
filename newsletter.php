<?php 
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	function checkEmail($email){  
  
    if(eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]", $email)){  
        return FALSE;  
    }  
  
    list($Usernome, $Domain) = split("@",$email);  
  
    if(@getmxrr($Domain, $MXHost)){  
        return TRUE;  
  
    } else {  
        if(@fsockopen($Domain, 25, $errno, $errstr, 30)){  
            return TRUE;  
        } else {  
  
            return FALSE;  
        }  
    }  
}     
   
$response_array = array();  
  
if(emptyempty($_POST['nome'])){  
    $response_array['status'] = 'error';  
    $response_array['message'] = 'nome está em branco';  
  
//check the email field  
} elseif(!checkEmail($_POST['email'])) {  
  
    //set the response  
    $response_array['status'] = 'error';  
    $response_array['message'] = 'Campo email inválido';  
  
//check the message field  
}  else {  
  
    //send the email  
    // $body = $_POST['nome'] . " sent you a message\n";  
    // $body .= "Details:\n\n" . $_POST['message'];  
    // mail($_POST['email'], "SUBJECT LINE", $body);  
  
    //set the response  
    $response_array['status'] = 'success';  
    $response_array['message'] = 'Cadastro feito com sucesso!';  
  
}  
  
//send the response back  
echo json_encode($response_array);  

?>