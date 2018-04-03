<?php 
require_once 'common/config.php';
require 'models/sendmail.class.php';

$sendmail = new SendMail();

//datos de form - tipo array
$datos_post = $_POST['data'];

$contPost = 0;
for($i=0;$i<count($datos_post);$i++){
    if($datos_post[$i]!=''){
        $contPost = $contPost+1;
    }
}

if(isset($datos_post)){
    echo '--> '.$contPost;
    if($contPost>0){
        
    $arr_mail = array(
         "title" => 'Aquí va el titulo'
        ,"bg" => '#eb2929'
        ,"url" => 'module/mail_contactenos.php'// html del mail
        ,"head-table" => array(
                                'nombre'
                                ,'email'
                                ,'telefono'
                                ,'mensaje'
                        )
        ,"body-table" => $datos_post//tipo array
    );

    // Definimos los correos a quienes le llegaran los mail
    $arr_addcc= array(
                    "AddAddress" => array(
                                        'hvasquez1.0@heedcom.com'
                                        ,'hvasquez1.1@heedcom.com'
                                        ,'hvasquez1.2@heedcom.com'
                                    ),
                    "AddCC" => array(
                                        'hvasquez2.1@heedcom.com'
                                    ),
                    "AddBCC" => array(
                                        'hvasquez3@heedcom.com'
                                    )
                );
    $sendmail->setMailRecep($arr_addcc);

      
    //Asunto del mail
    $sendmail->setMailSubject('PRUEBA-ASUNTO');

    //Nombre del que envía
    $sendmail->setMailFrom('HJ');

        
    //$val_send = $sendmail->sendMail($arr_mail);

    //echo $val_send;
    }else{
        echo 'Están vacíos todos los campos.';//Ejemplo
    }

}


?>