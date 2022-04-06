<?

function db() {
    $dbname = 'user_1700';
    $dbuser = 'root'; 
    $dbpass = '';
    $dbhost = '127.0.0.1';

    return new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}


function userReg($login, $pass, $name, $photo) {
    $login  = strip_tags($login);
    $name   = strip_tags($name);
    $pass   = password_hash($pass, CRYPT_BLOWFISH);

    $db     = db();
    $query  = "INSERT INTO user (name, login, password) VALUE (?, ?, ?)";
    $create = $db->prepare($query);
    $result = $create->execute([$name, $login, $pass]);
   
   
   
   if($result):
      $userId = $db->lastInsertId();
      $imgQ = "INSERT INTO images (user_id, img_path, img_select ) VALUE (?, ?, ?)";
      $imgP = $db->prepare($imgQ);
      $imgR = $imgP->execute([$userId, $photo, 1]);
   endif;
   
   
    return $result;
}


function userAuth($login, $password){
    $db = db();
    $query = "SELECT * FROM user INNER JOIN images using(user_id) WHERE login=?";
    $select = $db->prepare($query);
    $select->execute([$login]);
    $users = $select->fetch(PDO::FETCH_ASSOC);
    
    
    
    if($users):
       if(password_verify($password, $users['password'])):
          session_start();
          $_SESSION['id'] = $users['user_id'];
          return true;
       endif;
    endif;
  return $result;
     
}



function userInfo(){
    session_start();
    $db = db();
    $query = "SELECT login, name, img_path FROM user INNER JOIN images using(user_id) WHERE user_id=? and img_select=?";
    $select = $db->prepare($query);
    $select->execute([$_SESSION['id'], 1]);
    $result = $select->fetch(PDO::FETCH_ASSOC);
    
    return  $result;
}
    
   
    
 function editName($name){
     session_start();
     $db = db();
     $query = "UPDATE user SET name=?  WHERE user_id=?";
     $update = $db->prepare($query);
     $result = $update->execute([$name, $_SESSION['id']]);
     return $result;
 }

 function editLogin($login){
     session_start();
     $db = db();
     $query = "UPDATE user SET login=?  WHERE user_id=?";
     $update = $db->prepare($query);
     $result = $update->execute([$login, $_SESSION['id']]);
     return $result;
 }


 function editPass($password){
    $password = password_hash($password, CRYPT_BLOWFISH);
    session_start();
    $db = db();
    $query = "UPDATE user SET password=?  WHERE user_id=?";
    $update = $db->prepare($query);
    $result = $update->execute([$password, $_SESSION['id']]);
    return $result;
}


function addUserPhoto($path){
    $userId = $_SESSION['id'];
    $db = db();
    $query = "INSERT INTO images (user_id, img_path, img_select ) VALUE (?, ?, ?)";
    $update = $db->prepare($query);
    $result = $update->execute([$userId, $path, 0]);
    return $result;
}


function getPhotos(){
    session_start();
    $db = db();
    $query = "SELECT * FROM images WHERE user_id=?";
    $select = $db->prepare($query);
    $select->execute([$_SESSION['id']]);
    $result = $select->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



?>
