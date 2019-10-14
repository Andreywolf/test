<?php

$data = $_GET;
$link = "";
$query = "";
$result ='';
$check = false;

if( isset($data['dates']) ) {
	$link = new mysqli('localhost', 'root', '', 'test')  or die("Ошибка " . mysqli_error($link));
    $query = "SELECT * FROM logs where dates=" ."'". $data['dates'] ."'";
    $result = mysqli_query($link, $query);
      mysqli_close($link);
   $check = true;
      
      
  


} 

require  'vendor/autoload.php';
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
 if ( $check == true) {
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/my_secret2.json');
		/*  SEND TO GOOGLE SHEETS */
		 $client = new Google_Client;
			try{
				$client->useApplicationDefaultCredentials();
			  $client->setApplicationName("Something to do with my representatives");
				$client->setScopes(['https://www.googleapis.com/auth/drive','https://spreadsheets.google.com/feeds']);
			   if ($client->isAccessTokenExpired()) {
					$client->refreshTokenWithAssertion();
				}

				$accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];
				ServiceRequestFactory::setInstance(
					new DefaultServiceRequest($accessToken)
				);
			   // Get our spreadsheet
				$spreadsheet = (new Google\Spreadsheet\SpreadsheetService)
					->getSpreadsheetFeed()
					->getByTitle('MyTable');

				// Get the first worksheet (tab)
				$worksheets = $spreadsheet->getWorksheetFeed()->getEntries();
				$worksheet = $worksheets[0];


				$listFeed = $worksheet->getListFeed();
				foreach($result  as $s) { 
				$listFeed->insert([
					'lastname' => "'". $s["lastname"],
					'name' => "'". $s["name"],
					'login' => "'". $s["login"] ,
					'pass' => "'". $s["pass"],
					'email' => "'". $s["email"],
					'type' => "'". $s["type"],
					'date' => "'". $s["dates"]

				]);
			}

			


			}catch(Exception $e){
			  echo $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode;
			}
			echo 'добавлено в таблицу';
			  
}       else {
	echo "ошибка";
}
			

			/*  SEND TO GOOGLE SHEETS */