<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 首页
 */
class IndexController extends HomebaseController {
	
    //首页
	public function index() {
    	$this->display(":index");
    }

    public function send_email() {
    	$error_message = '';
    	// if (I('name') == null) {
    	// 	echo $error_message .= 'error-name';
    	// 	exit();
    	// }
    	// if (I('email') == null) {
    	// 	echo $error_message .= 'error-email';
    	// 	exit();
    	// }
    	// if (I('message') == null) {
    	// 	echo $error_message .= 'error-message';
    	// 	exit();
    	// }
    	$result = $this->_send_email('654753115@qq.com', 'dsdsdd', 'dsdsdsdsdsds');

    	if ($result['error'] == 1) {
    		echo $error_message .= $result['message'];
    		exit();
    	} elseif ($result['error'] == 0) {
    		echo 'success';
    		exit();
    	}
    	// echo 'error-name,error-email,error-message';
    	// echo 'success';
    }
    public function _send_email($address,$subject,$message) {
    	import("PHPMailer");
		$mail=new \PHPMailer();
		// 设置PHPMailer使用SMTP服务器发送Email
		$mail->IsSMTP();
		$mail->IsHTML(true);
		// 设置为"需要验证"
		$mail->SMTPAuth=true;
		// 设置用户名和密码。
		$mail->Username="654753115@qq.com";
		$mail->Password="bonse.123";
		// 设置邮件的字符编码，若不指定，则为'UTF-8'
		$mail->CharSet='UTF-8';
		// 添加收件人地址，可以多次使用来添加多个收件人
		$mail->AddAddress($address);
		// 设置邮件正文
		$mail->Body=$message;
		// 设置邮件头的From字段。
		$mail->From='654753115@qq.com';
		// 设置发件人名字
		$mail->FromName='elinxer';;
		// 设置邮件标题
		$mail->Subject=$subject;
		// 设置SMTP服务器。
		$mail->Host='smtp.qq.com';
		// 设置SMTP服务器端口。
		$mail->Port=25;
		
		// 发送邮件。
		if(!$mail->Send()) {
			$mailerror=$mail->ErrorInfo;
			return array("error"=>1,"message"=>$mailerror);
		}else{
			return array("error"=>0,"message"=>"success");
		}
    }
}


