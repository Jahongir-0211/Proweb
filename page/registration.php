
        <main class="main">
            <section class="head">
                <h2 class="head__title">Регистрация в системе</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>

            <form action="../includes/user-register.php" class="form" method="post" enctype="multipart/form-data">
                <label class="form__label">
                
                    <input type="text" class="form__input" name="login" autocomplete="off">
                </label>
                <label class="form__label">
                   
                    <input type="text" class="form__input" name="name" autocomplete="off">
                </label>
                <label class="form__label">
                 
                    <input type="password" class="form__input" name="pass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <label class="form__label">
                   
                    <input type="password" class="form__input" name="confirmpass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                
                <input class="form__file" type="file" name="photo" id="" accept="image/jpg,image/png,image/gif">
                
                <span class="form__error">* Пароли не совподают</span>
                <button class="form__btn" >Зарегистрироваться</button>
            </form>
        </main>
   