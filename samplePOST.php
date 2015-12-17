
<? php
		// $url = "http://localhost:8080/Favor/work/update?workid=4&acceptorid=6&compstatus=1";
		// $ch = curl_init($url);
		// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		// curl_setopt($ch, CURLOPT_POST, true);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// $data = curl_exec($ch);
		// curl_close($ch);
		// var_dump($data); 

	//$content='';
	 $curl = curl_init('http://localhost:8080/Favor/work/update?workid=2&acceptorid=4&compstatus=1');
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

	$json_response = curl_exec($curl);

	$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

	curl_close($curl);

	$response = json_decode($json_response, true);
	var_dump($response);
?>
