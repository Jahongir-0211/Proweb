<?

include_once './db.php';
$photos = $_FILES['photos'];


foreach($photos['name'] as $key => $name):
    
$randName = md5(time()) . "_$key";
$photoExp = '.' . PATHINFO($name, PATHINFO_EXTENSION );
$user = userInfo();
$photoName = $photo['type'] !== '' ? $user['login'] . '-' . $randName . $photoExp : 'default.png';
$dirNamePhoto = "./img/users/$photoName";

$result = addUserPhoto($dirNamePhoto);

if($result):
    move_uploaded_file($photos['tmp_name'][$key], ".$dirNamePhoto");
endif;
    
endforeach;

header('Location:/?route-edit');

?>

