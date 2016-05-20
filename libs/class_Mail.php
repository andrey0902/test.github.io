<?php 
/* образец функции маил: mail('кому','тема письма','текст письма',$headers)*/

class Mail{
	static $subject='По умолчанию';
	static $from='andrey1@gmail.com';
	static $to='andreypavlov1706@gmail.com';
	static $text='Шаблон письма';
	static $headers='';
	
	static function send(){
		self::$subject= '=?utf-8?b?'.base64_encode(self::$subject) .'?=';
		self::$headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
		self::$headers.="From:".self::$from."\r\n";
		self::$headers .="MIME-Version:1.0\r\n";
		self::$headers .="Date:". date('D, d M Y h:i:s o')."\r\n";
		self::$headers .="Precedence: bulk\r\n";
		
		if(mail(self::$to,self::$subject,self::$text,self::$headers)){
			echo'Письмо  дошло';
		}else{
			echo'Письмо не дошло';
		}
     
	}
/* проверочный запрост на отправку письма*/
	static function testMail(){
		if(mail(self::$to,'English World1','English World2')){
			echo 'Письмо отправилось';
		}else { 
			echo'Письмо не отрпавилось';
		}
		exit();
	}
	/*конец проверочного запроса на отправку письма*/
	
	}