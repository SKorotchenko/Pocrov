<?php
function sendMail($to, $subject, $content, $from){
	$text = '
		<!DOCTYPE html>
		<html>
			<head>
				<title>'.$subject.'</title>
				<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
			</head>
			<body>
				'.$content.'
			</body>
		</html>
	';

	$subject = iconv('utf-8', 'windows-1251', $subject);
	$text = iconv('utf-8', 'windows-1251', $text);

	$headers = 'From: "'.$from.'"<'.$from.'>\r\n';
	$headers.= 'X-sender: "'.$from.'"<'.$from.'>\r\n';
	$headers.= 'Content-Type: text/html; charset=windows-1251\r\n';
	$headers.= 'MIME-Version: 1.0\r\n';
	$headers.= 'Content-Transfer-Encoding: 8bit\r\n';

	return mail($to, $subject, $text, $headers);
}
?>