<?php




	// Add Domain

	if (isset($_GET["export"]))
	{
		$domain = base64_decode($_GET["export"]);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://restpack.io/api/html2pdf/v2/convert",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "url=" . $domain . " &json=true&fresh=true",
		  CURLOPT_HTTPHEADER => array(
		    "x-access-token: iw4nJZMb46w4hAYVPDZpRaboEUhDL8MldsS2WlSRmLHn7m1n"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) 
		{
		  	return;
		}

		$response = json_decode($response,true);

		echo $response["image"];
	
	}

?>