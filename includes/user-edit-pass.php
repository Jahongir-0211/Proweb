<? 
 include_once './db.php';
 
 editPass($_POST['editpass']);
 
 header('Location:/?route=edit');
 
 //var_dump($_POST['editpass']);
 
?>