<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../module/src/Exception.php';
require '../module/src/PHPMailer.php';
require '../module/src/SMTP.php';

$mail = new PHPMailer(true);                               
    $mail->isSMTP();                                      
    $mail->Host = 'mail.taarangana.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = '';                 
    $mail->Password = '';               
    $mail->Port = 25;                         
    
    $mail->SMTPOptions = array(
	'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
	)
	);
	//Recipients
    $mail->setFrom('','Taarangana\'18');
$mail1 = new PHPMailer(true);                               
    $mail1->isSMTP();                                      
    $mail1->Host = 'mail.taarangana.com';  
    $mail1->SMTPAuth = true;                               
    $mail1->Username = '';                 
    $mail1->Password = '';               
    $mail1->Port = 25;                         
    
    $mail1->SMTPOptions = array(
	'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
	)
	);
	//Recipients
    $mail1->setFrom('','Taarangana\'18');
    

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$numbr = mysqli_real_escape_string($conn,$_POST['numbr']);
$clg = mysqli_real_escape_string($conn,$_POST['clg']);
$event = mysqli_real_escape_string($conn,$_POST['event']);
$no = mysqli_real_escape_string($conn,$_POST['no']);

	$mail->addAddress($email);
	$mail1->addAddress('events.management@taarangana.com');
	$sql = "insert into register (student_name, email, contact_number, clg, event, no) values ('$name', '$email', '$numbr', '$clg', '$event', '$no')";
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Taarangana\'18 Event Registration Confirmation';
    $mail->Body    = 'Dear Participant,'."<br><br>".

'Thank you for registering for '. $event .' in Taarangana 2018, to be held on the 2nd and 3rd of February.'."<br><br>".

'Communication pertaining to further rounds and selection procedure and criteria will be circulated via email and, can also be read on our Website. For any doubts regarding the event please feel free to revert back to this email or contact the undersigned.'."<br><br>".

'Meanwhile, to complete the registration process, kindly keep in mind the following deadlines :-'."<br><br>".

"<u>".'Last date for submission of entry - 26.01.2018'."</u><br>".
"<u>".'Shortlisted participants will receive the confirmation mail by
29.01.2018'."</u><br>".
"<u>".'Shortlisted participants have to confirm their participation by
01.02.2018'."</u><br><br>".

'Stay tuned to our Facebook Page [1] and Website [2] for more details and information about other events and schedule.Also find us on Instagram [3], Twitter [4] and YouTube [5].'."<br><br>".
'Warm Regards,'."<br>".
'Organizing Committee'."<br>".
'Taarangana 2018'."<br><br>";
if(strcmp($event,"Alluring Whispers")==0){
	$mail->Body    = $mail->Body.'Email ID: alluringwhispers2018@gmail.com'."<br>".'Somya 	9958610980'."<br>".'Archi Jain	9013921154'."<br>".'Garima 	9888009403'."<br><br>";
}
elseif(strcmp($event,"Lilac Dreams")==0){
	$mail->Body    = $mail->Body.'Email ID: lilacdreams2018@gmail.com'."<br>".'Neha makhija	9205102077'."<br>".'Kriti Sharma 	7042107250'."<br>".'Niharika	9873812882'."<br><br>";
}
elseif(strcmp($event,"Anhad")==0){
	$mail->Body    = $mail->Body.'Email ID: anhad2018@gmail.com'."<br>".'Prerna 	8271593606'."<br>".'Mrinali	9654764987'."<br>".'Neha Mani	8287454875'."<br><br>";
}
elseif(strcmp($event,"Synnove")==0){
	$mail->Body    = $mail->Body.'Email ID: synnove2k18@gmail.com'."<br>".'Aarti	8700082769'."<br>".'Nikita Joshi	9582454540'."<br><br>";
}
elseif(strcmp($event,"Quillography")==0){
	$mail->Body    = $mail->Body.'Email ID: quillography2018@gmail.com'."<br>".'Rashi	9650239066'."<br>".'Richa	9654246717'."<br><br>";
}
elseif(strcmp($event,"Campus Princess")==0){
	$mail->Body    = $mail->Body.'Email ID: campusprincessevent2018@gmail.com'."<br>".'Anuradha	8802977946'."<br>".'Padma 	9122369947'."<br>".'Pooja Gupta	9984218911'."<br><br>";
}
elseif(strcmp($event,"Knights of the fall")==0){
	$mail->Body    = $mail->Body.'Email ID: battleofbands2018@gmail.com'."<br>".'Damini	9536109083'."<br>".'Aditi	8376858145'."<br>".'Asmita 	9013046021'."<br><br>";
}
elseif(strcmp($event,"Urban Thump")==0){
	$mail->Body    = $mail->Body.'Email ID: urbanthump2018@gmail.com'."<br>".'Mahwash	9560606814'."<br>".'Anuradha	8802977946'."<br>".'Sakshi	9891965162'."<br><br>";
}
elseif(strcmp($event,"Antraa")==0){
	$mail->Body    = $mail->Body.'Email ID: antraa2k18@gmail.com'."<br>".'Anchal	8437955624'."<br>".'Himanshi	9650161796'."<br><br>";
}
elseif(strcmp($event,"Pop Art")==0){
	$mail->Body    = $mail->Body.'Email ID: popart22k18@gmail.com'."<br>".'Tanvi	9871863500'."<br>".'Garima	9888009403'."<br><br>";
}
elseif(strcmp($event,"Slam Poetry")==0){
	$mail->Body    = $mail->Body.'Email ID: slampoetry2018@gmail.com'."<br>".'Yashika	9717354901'."<br>".'Geeta	9818342871'."<br><br>";
}
elseif(strcmp($event,"Aaghaz")==0){
	$mail->Body    = $mail->Body.'Email ID: aaghaz2k18@gmail.com'."<br>".'Charuni	9219242222'."<br>".'Koshima 	9643558904'."<br>".'kiran kadbal	7532854121'."<br><br>";
}
elseif(strcmp($event,"Mr. and Ms.Taarangana")==0){
	$mail->Body    = $mail->Body.'Email ID: mr.andms.tarangana2018@gmail.com'."<br>".'Aarti	8700082769'."<br>".'Sakshi Kukreja	9891965162'."<br><br>";
}
$mail->Body    = $mail->Body.'Links:'."<br>".
'------'."<br>".
'[1] https://www.facebook.com/taarangana'."<br>".
'[2] http://taarangana.com/'."<br>".
'[3] https://www.instagram.com/taarangana/'."<br>".
'[4] https://twitter.com/_taarangana'."<br>".
'[5] https://www.youtube.com/channel/UC_qCTCCcOK8eFATY791zCnw';
    $mail->AltBody = 'Dear Participant,'."<br>".

'Thank you for registering for '. $event .' in Taarangana 2018, to be held on the 2nd and 3rd of February.'."<br>".

'Communication pertaining to further rounds and selection procedure and criteria will be circulated via email and, can also be read on our Website. For any doubts regarding the event please feel free to revert back to this email or contact the undersigned.'."<br>".

'Meanwhile, to complete the registration process, kindly keep in mind the following deadlines :-'."<br>".

'Last date for submission of entry - 26.01.2017'."<br>".
'Shortlisted participants will receive the confirmation mail by
29.01.2017'."<br>".
'Shortlisted participants have to confirm their participation by
31.01.2017'."<br>".

'Stay tuned to our Facebook Page [1] and Website [2] for more details and information about other events and schedule.'."<br>".

'Also find us on Instagram [3], Twitter [4] and YouTube [5].'."<br>".

'Warm Regards,'."<br>".
'Organizing Committee'."<br>".
'Taarangana 2018'."<br>".

'*Person 1* | *contact*'."<br>".
'*Person 2* | *contact*'."<br>".

'Links:'."<br>".
'------'."<br>".
'[1] https://www.facebook.com/taarangana'."<br>".
'[2] http://taarangana.com/'."<br>".
'[3] https://www.instagram.com/taarangana/'."<br>".
'[4] https://twitter.com/_taarangana'."<br>".
'[5] https://www.youtube.com/channel/UC_qCTCCcOK8eFATY791zCnw';
	
	$mail1->isHTML(true);                                  // Set email format to HTML
    $mail1->Subject = 'Taarangana\'18 Event Registration';
    $mail1->Body    = " Name: ".$name."\n Email: ".$email."\n Contact: ".$numbr."\n College: ".$clg."\n Event: ".$event."\n No. of Participants: ".$no;
 $mail1->AltBody = "Name: ".$name."\n Email: ".$email."\n Contact: ".$numbr."\n College: ".$clg."\n Event: ".$event."\n No. of Participants: ".$no;
	
try{
    $mail->send();
	$mail1->send();
} catch (Exception $e) {
}

$conn->close();
?>