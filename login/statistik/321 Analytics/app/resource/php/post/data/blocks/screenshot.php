<?php

	function page_screenshot($url,$width)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://restpack.io/api/screenshot/v2/capture",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "url=" . $url . "&json=true&width=" . $width,
			CURLOPT_HTTPHEADER => array("x-access-token: 2W6ftaxaMhNIVtrnE0AL5LVIXoxFYKzBkApAJapGr4VA5FJh"),
		));

		$response = curl_exec($curl);
		$error = curl_error($curl);
		curl_close($curl);

		if ($error) 
		{
			return "";
		}

		$response = json_decode($response,true);

		return $response["image"];
	}

?>