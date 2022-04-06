
        <main class="main">
            
            
            <? $pass1 = md5('55555'); ?>
            <? $pass2 = md5('55555'); ?>
            <? $pass3 = password_hash('55555', CRYPT_BLOWFISH); ?>
            <? $pass4 = password_hash('55555', CRYPT_BLOWFISH); ?>
            
            <br>
            <br>
            
            <? echo $pass1  ?>
            
            <br>
            <br>
            
            <? echo $pass2  ?>
            
            <br>
            <br>
            
            <? echo $pass3  ?>
            <br>
            <br>
            
            <? echo $pass4  ?>
            
        </main>
    
    
    