<?
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
function getRevdate($id){
    $sql1="select * from reviews where id_rev='".$id."'";
         $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
         $result = mysqli_query($con, $sql1);
         if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_object($result)->date;
         }
}
function getEmail($st){
    $sql1="select * from reviews INNER JOIN user ON user.username=reviews.username where id_rev='".$st."'";
    $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
    $result = mysqli_query($con, $sql1);
    if(mysqli_num_rows($result) > 0){
       return mysqli_fetch_object($result)->email;
    }
}
function getReact($x){
    switch ($x) {
        case 1:
            return "Like";
            break;
        case 2: return "Love";
        break;
        case 3: return "Hot";
        break;
        case 4: return "Sad";
        break;
        default:
            # code...
            break;
    }
}
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'gameempire72@gmail.com';                     // SMTP username
    $mail->Password   = 'game123$';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('gameempire72@gmail.com', 'Game Empire');
    $mail->addAddress(getEmail($like->getIdRev()), "Ahmed Debbech");     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'React notification from Game Empire';
    $mail->Body    = "The user ".$like->getUsername(). " rected with ".getReact($like->getType())." on your review ".getRevDate($like->getIdRev());
    $mail->AltBody = "The user ".$like->getUsername(). " rected with ".getReact($like->getType())." on your review ".getRevDate($like->getIdRev());

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>