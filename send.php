$mailForm = $_POST['mailForm'];
$usernameForm = $_POST['usernameForm'];
$numberPhoneForm = $_POST['numberPhoneForm'];

$mailForm = htmlspecialchars($mailForm);
$usernameForm = htmlspecialchars($usernameForm);
$numberPhoneForm = htmlspecialchars($numberPhoneForm);

mail("kaefeuphoria@mail.ru", "Заявка с сайта", "Имя:".$usernameForm.". E-mail: ".$mailForm ,"From: my@mail.ru \r\n");

ini_set("display_errors","On");
error_reporting("E_ALL");
