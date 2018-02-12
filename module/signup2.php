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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//creating image
$my_img = imagecreatefromjpeg ( "entry_paas.jpeg" );
$text_colour = imagecolorallocate( $my_img, 255, 255, 255 );

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$numbr = mysqli_real_escape_string($conn,$_POST['numbr']);
$clg = mysqli_real_escape_string($conn,$_POST['clg']);

	$sql = "insert into taarangana (student_name, email, contact_number, clg) values ('$name', '$email', '$numbr', '$clg')";
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$sql = "SELECT id FROM taarangana where contact_number = '$numbr' AND student_name ='$name'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row["id"];
	imagestring( $my_img, 5, 140, 3, $id, $text_colour );	
	imagestring( $my_img, 5, 151, 176, $name, $text_colour );
	imagestring( $my_img, 1, 151, 202, $email, $text_colour );
	imagestring( $my_img, 5, 151, 220, $numbr, $text_colour );
	imagestring( $my_img, 5, 151, 240, $clg, $text_colour );
	imagepng( $my_img, "Taarangana'18_Entry_Paas".$id.".png" );
	$image_name="../module/Taarangana'18_Entry_Paas".$id.".png";
	echo "
                <h1>Team Taarangana</h1>
				<p>Your response has been recorded succesfully<br>Please download your Entry Pass<br><br>
-- Rules and Regulations --</p>
<ul style=\"text-align: left;\">
<li>Entry Pass is compulsory for Entry in the fest(The same pass will be valid for both the days)</li>
<li>Bring along your college ID card (or any other valid ID proof)</li>
<li>No outside beverages(including water) or eatables are allowed inside the campus</li>
<li>Perfumes or any other flammable objects are forbidden.</li>
<li>No entry after 4:30pm</li></ul>
				<a href=".$image_name." type=\"button\" class=\"btn btn-border btn-190\" download><span>Download Pass</span></a>&nbsp;&nbsp;
				<a href=".$image_name." type=\"button\" class=\"btn btn-border btn-190\" data-fancybox data-caption=\"Take a Screenshot!\"><span>View Pass</span></a><br><br><br>
";

	$mail->addAddress($email);
	$mail->addAttachment($image_name);
	

	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Taarangana\'18 Entry Pass';
    $mail->Body    = 'Dear '.$name."<br><br>".
	'Thank you for registering!'."<br><br>".
'Get ready to feel the allure of caped crusaders and be mystified by their epic adventures! Taarangana promises you two crazy days – jam packed with events, picture-worthy moments and great fun.'."<br><br>".
'Don’t forget to bring this pass – it is your key to stepping inside and seeing the grandeur of the superheroes yourself.'."<br><br>".
'Cheers,'."<br>".
'Taarangana’18'
;
    $mail->AltBody = 'Dear '.$name."<br><br>".
	'Thank you for registering!'."<br><br>".
'Get ready to feel the allure of caped crusaders and be mystified by their epic adventures! Taarangana promises you two crazy days – jam packed with events, picture-worthy moments and great fun.'."<br><br>".
'Don’t forget to bring this pass – it is your key to stepping inside and seeing the grandeur of the superheroes yourself.'."<br><br>".
'Cheers,'."<br>".
'Taarangana’18'
;
try{
    $mail->send();
} catch (Exception $e) {
}
	

//destroying image
imagedestroy( $my_img );
$conn->close();
?>