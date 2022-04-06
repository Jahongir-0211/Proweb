<?

include_once './db.php';

editName($_POST['editname']);

header('Location:/?route=edit');

?>