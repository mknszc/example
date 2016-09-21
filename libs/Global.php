<?php
//using function all

function pageRedirect($page) {
	header('location:'.$page.'');
}

function getToday() {
        return date('Y-m-d');
}

function getFullDate() {
        return date('Y-m-d H:i:s');
}

function getTime() {
	return date('H-i-s');
}

function addDay($day) {
	return date('d-m-Y', strtotime(getToday() . ' ' . $day . ' days'));
}

function addMinute($minute) {
	return date('Y-m-d H:i:s', strtotime("$minute min"));
}



function textUpdate($yazi) {
	$karakter = array("Ã§", "Ã‡", "ÄŸ", "Ä", "Ğ±", "Ğ°", "Ã¶", "Ã–", "ÅŸ", "Å", "Ã¼", "Ãœ");
	$karakterdegis = array("ç", "Ç", "ğ", "Ğ", "ı", "İ", "ö", "Ö", "ş", "Ş", "ü", "Ü");
	$yazi = str_replace($karakter, $karakterdegis, $yazi);
	return $yazi;
}

function getIpAddress() {
	return $_SERVER['REMOTE_ADDR'];
}

function visitorIp(){
	return $_SERVER['HTTP_X_FORWARDED_FOR'];
}

function writeData($result) {
	echo "<pre>";
	var_dump($result);
	echo "</pre>";
}

function createPassword(){
	return randomNumericString(2) . randomAlphaNumericString(2) . randomNumericString(2);
}

function randomNumericString($length = 8) {
	$characters = '0123456789';
	$randomString = '';
	for ($i = 0; $i < $length; $i++)
	{
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

function randomAlphaNumericString($length = 8) {
	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';
	for ($i = 0; $i < $length; $i++)
	{
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

function clearPhone($text) {
	$text = str_replace(array(" ", "-", "+"), array("", "", ""), $text);
	$text = trim($text);
	$text = pg_escape_string($text);
	$text = strip_tags($text);
	$text = htmlspecialchars($text);
	return substr($text, -10);
}

function clearWhiteSpaces($text) {	
	$text = trim($text);
	$text = pg_escape_string($text);
	$text = strip_tags($text);
	$text = htmlspecialchars($text);
	return str_replace(" ", "", $text);
	
}

function addError(&$errorMessage, $message) {
	$errorMessage .= '<div class="alert alert-danger" role="alert", "name" => "' . $message . '</div>';
}

function sendMail($to, $from, $subject, $body) {
	$headers = array('MIME-Version: 1.0', 'Content-Type: text/html; charset="UTF-8";', 'Content-Transfer-Encoding: 7bit', 'Date: ' . date('r', $_SERVER['REQUEST_TIME']), 'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>', 'From: ' . $from, 'Reply-To: ' . $from, 'Return-Path: ' . $from, 'X-Mailer: PHP v' . phpversion(), 'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'],);
	mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\n", $headers), '-f' . $from);
}




function isHttps() {
	return ($_SERVER["HTTPS"] == "on");
}



function getUrl() {
	return ($_SERVER["HTTPS"] == "on" ? "https://" : "http://") . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
}

function ismobile() {
	if (preg_match('/(android|up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i', strtolower($_SERVER['HTTP_USER_AGENT'])) || (strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']))))
	{
		return true;
	}
	$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
	$mobile_agents = array('w3c ', 'acs-', 'alav', 'alca', 'amoi', 'andr', 'audi', 'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno', 'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-', 'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-', 'newt', 'noki', 'oper', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-', 'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp', 'wapr', 'webc', 'winw', 'winw', 'xda', 'xda-');
	if (in_array($mobile_ua, $mobile_agents) || (isset($_SERVER['ALL_HTTP']) && strpos(strtolower($_SERVER['ALL_HTTP']), 'OperaMini') > 0))
	{
		return true;
	}
	return false;
}

function date_tr($f, $zt = 'now') {
	$z = date($f, strtotime($zt));
	$gunler = array('Monday' => 'Pazartesi', 'Tuesday' => 'Salı', 'Wednesday' => 'Çarşamba', 'Thursday' => 'Perşembe', 'Friday' => 'Cuma', 'Saturday' => 'Cumartesi', 'Sunday' => 'Pazar');
	$aylar = array('January' => 'Ocak', 'February' => 'Şubat', 'March' => 'Mart', 'April' => 'Nisan', 'May' => 'Mayıs', 'June' => 'Haziran', 'July' => 'Temmuz', 'August' => 'Ağustos', 'September' => 'Eylül', 'October' => 'Ekim', 'November' => 'Kasım', 'December' => 'Aralık');
	foreach ($gunler as $engun => $trgun)
	{
		if (strpos($z, $engun) !== false)
		{
			$z = str_replace($engun, $trgun, $z);
			break;
		}
	}
	foreach ($aylar as $en => $tr)
	{
		if (strpos($z, $en) !== false)
		{
			$z = str_replace($en, $tr, $z);
			break;
		}
	}
	return $z;
}






function array_sort($array, $on, $order = SORT_ASC) {
	$new_array = array();
	$sortable_array = array();
	if (count($array) > 0)
	{
		foreach ($array as $k => $v)
		{
			if (is_array($v))
			{
				foreach ($v as $k2 => $v2)
				{
					if ($k2 == $on)
					{
						$sortable_array[$k] = $v2;
					}
				}
			}
			else
			{
				$sortable_array[$k] = $v;
			}
		}
		switch ($order)
		{
			case SORT_ASC:
				asort($sortable_array);
				break;
			case SORT_DESC:
				arsort($sortable_array);
				break;
		}
		foreach ($sortable_array as $k => $v)
		{
			$new_array[$k] = $array[$k];
		}
	}
	return $new_array;
}

function encode($string, $key) {
	$key = sha1($key);
	$strLen = strlen($string);
	$keyLen = strlen($key);
	for ($i = 0; $i < $strLen; $i++)
	{
		$ordStr = ord(substr($string, $i, 1));
		if ($j == $keyLen)
		{
			$j = 0;
		}
		$ordKey = ord(substr($key, $j, 1));
		$j++;
		$hash .= strrev(base_convert(dechex($ordStr + $ordKey), 16, 36));
	}
	return $hash;
}

function decode($string, $key) {
	$key = sha1($key);
	$strLen = strlen($string);
	$keyLen = strlen($key);
	for ($i = 0; $i < $strLen; $i += 2)
	{
		$ordStr = hexdec(base_convert(strrev(substr($string, $i, 2)), 36, 16));
		if ($j == $keyLen)
		{
			$j = 0;
		}
		$ordKey = ord(substr($key, $j, 1));
		$j++;
		$hash .= chr($ordStr - $ordKey);
	}
	return $hash;
}

function replace_tr($text) {
	$text = trim($text);
	$search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ');
	$replace = array('C', 'C', 'G', 'G', 'I', 'I', 'O', 'O', 'S', 'S', 'U', 'U', '-');
	$new_text = str_replace($search, $replace, $text);
	return $new_text;
}

function clearGet() {
	foreach ($_GET as $key => $value)
	{
		$_GET[$key] = pg_escape_string($_GET[$key]);
	}
}

function clearPost() {
	foreach ($_POST as $key => $value)
	{
		$_POST[$key] = pg_escape_string($value);
	}
}

function trBuyukHarf($yazi) {
	$arananlar = array('/i/', '/ı/', '/ş/', '/ö/', '/ü/', '/ğ/', '/ç/');
	$yeniler = array('İ', 'I', 'Ş', 'Ö', 'Ü', 'Ğ', 'Ç');
	ksort($arananlar);
	ksort($yeniler);
	$yazi = preg_replace($arananlar, $yeniler, $yazi);
	$yazi = strtoupper($yazi);
	return $yazi;
}

function trKucukHarf($yazi) {
	$yeniler = array('/i/', '/ı/', '/ş/', '/ö/', '/ü/', '/ğ/', '/ç/');
	$arananlar = array('İ', 'I', 'Ş', 'Ö', 'Ü', 'Ğ', 'Ç');
	ksort($arananlar);
	ksort($yeniler);
	$yazi = preg_replace($arananlar, $yeniler, $yazi);
	$yazi = strtoupper($yazi);
	return $yazi;
}



function curl($url) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 10);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
	$curlData = curl_exec($curl);
	curl_close($curl);
	return $curlData;
}