﻿<?php
/**
 * Created by PhpStorm.
 * User: Sofia Korotchenko
 * Date: 27.10.14
 * Time: 13:07
 */
if ($_POST) {
    $name = htmlspecialchars($_POST["name"]);
    $email = 'pokrov-ltd@ukr.net';
    $emailFrom = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $country = htmlspecialchars($_POST["country"]);
    $telephone = htmlspecialchars($_POST["telephone"]);

    $json = array(); // подготовим массив ответа
    if (!$name or !$message or !$emailFrom or !$telephone or !$country) {
        $json['error'] = 'Заполнены не все поля!';
        echo json_encode($json);
        die();
    }
    if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) {
        $json['error'] = 'Не правильный формат для email!';
        echo json_encode($json);
        die();
    }

    function mime_header_encode($str, $data_charset, $send_charset) {
        if($data_charset != $send_charset)
            $str=iconv($data_charset,$send_charset.'//IGNORE',$str);
        return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
    }

    class TEmail {
        public $from_email;
        public $from_name;
        public $to_email;
        public $to_name;
        public $subject;
        public $data_charset='UTF-8';
        public $send_charset='windows-1251';
        public $body='';
        public $type='text/plain';

        function send(){
            $dc=$this->data_charset;
            $sc=$this->send_charset;
            $enc_to=mime_header_encode($this->to_name,$dc,$sc).' <'.$this->to_email.'>';
            $enc_subject=mime_header_encode($this->subject,$dc,$sc);
            $enc_from=mime_header_encode($this->from_name,$dc,$sc).' <'.$this->from_email.'>';
            $enc_body=$dc==$sc?$this->body:iconv($dc,$sc.'//IGNORE',$this->body);
            $headers='';
            $headers.="Mime-Version: 1.0\r\n";
            $headers.="Content-type: ".$this->type."; charset=".$sc."\r\n";
            $headers.="From: ".$enc_from."\r\n";
            return mail($enc_to,$enc_subject,$enc_body,$headers);
        }

    }

    $emailgo= new TEmail;
    $emailgo->from_email= $emailFrom;
    $emailgo->from_name= $name;
    $emailgo->to_email= $email;
    $emailgo->to_name= 'Покров';
    $emailgo->subject= '';
    $emailgo->body= $name."\v\r\n".$country."\r\n".$telephone."\r\n".$emailFrom."\r\n".$message;
    $emailgo->send();

    $json['error'] = 0;

    echo json_encode($json);
} else {
    echo 'GET LOST!';
}
?>