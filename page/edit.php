<main class="main">
            <section class="head">
                <h2 class="head__title"><?= $userInfo['login']?></h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            
            
            <div class="user-images">
               <img class="user-image__item" src="<?= $userInfo['img_path']?>" alt="">
            </div>
            
            <form action="../includes/user-edit-name.php" method="POST">
                <fieldset class="editName">
                     <legend class="editName_title">Изменить имя</legend>
                     <input class="editName__input" type="text" name="editname"  value="<?= $userInfo['name'] ?>" >
                     <button class="form_btn">Изменить</button>
                </fieldset>
            </form>
            
            <form action="../includes/user-edit-login.php" method="POST">
                <fieldset class="editName">
                     <legend class="editName_title">Изменить логин</legend>
                     <input class="editName__input" type="text" name="editlogin"  value="<?= $userInfo['login'] ?>" >
                     <button class="form_btn">Изменить</button>
                </fieldset>
            </form>
            
            <form action="../includes/user-edit-pass.php" method="POST">
                <fieldset class="editName">
                     <legend class="editName_title">Изменить пароль</legend>
                     <input class="editName__input" type="text" name="editpass"  value="<?= $userInfo['password'] ?>" >
                     <button class="form_btn">Изменить</button>
                </fieldset>
            </form>
            
            <form class="form" action="../includes/user-photos.php" method="post" enctype="multipart/form-data">
               <fieldset class="editName">
                   <legend class="editName_title">Добавить фотографии</legend>
                   <input class="editName__input" type="file" multiple name="photos[]" accept="image/jpeg,image/png,image/gif">
                     <button class="form_btn">Добавить</button>
               </fieldset>
            </form>
            
            <form class="photos" action="" method="post">
                 <? $allPhotos = getPhotos(); ?>
                 
               <?foreach($allPhotos as $key => $value):?>
               
                  <label class="photos__item">
                      <img class="photos__item-pic" src="<?=$value['img_path']?>" alt="">
                  </label>
               
               <?endforeach;?>               
                 
            </form>
</main>