<? include_once './db.php' ?>
<? 



$photo = $_FILES['photo'];
$randName = md5(time());
$photoExp = '.' . PATHINFO($photo['name'],PATHINFO_EXTENSION );
$photoName = !empty($photo) ? $_POST['login'] . '-' . $randName . $photoExp : 'defult.jpg';
$dirNamePhoto = "./img/users/$photoName";

$userReg = userReg($_POST['login'], $_POST['name'], $_POST['pass'], $dirNamePhoto);



if($userReg and $photo):
    move_uploaded_file($photo['tmp_name'], ".$dirNamePhoto");
endif;

 header('Location:/?route=login');  

?>
