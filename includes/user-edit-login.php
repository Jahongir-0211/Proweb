<?

include_once './db.php';

editLogin($_POST['editlogin']);

header('Location:/?route=edit');

?>