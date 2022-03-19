<?php

    $ret =
        $header.'
        <div class="auth-container">
            <h1 class="auth-header">
                Авторизация
            </h1>
            <div class="auth-content">
                <div class="ac-inline">
                    <form id="login" method="post">
                        <h3>Вход</h3>
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="test@example.com" required>
                        <label for="password">Пароль:</label>
                        <input type="password" name="password" id="password" minlength="6" required>
                        <button class="auth-submit">Войти</button>
                    </form>
                    
                    <form id="signup" method="post">
                        <h3>Регистрация</h3>
                        <label for="username">Имя пользователя:</label>
                        <input type="text" name="username" id="username" placeholder="Например, ivan_ivanov" minlength="4" required>
                        <label for="semail">E-mail:</label>
                        <input type="email" name="email" id="semail" placeholder="test@example.com" required>
                        <label for="apassword">Пароль:</label>
                        <input type="password" name="password" id="apassword" minlength="6" required>
                        <label for="bpassword">Повтор пароля:</label>
                        <input type="password" name="password_repeat" id="bpassword" minlength="6" required>
                        <button class="auth-submit">Далее</button>
                    </form>
                </div>
            </div>
            <div class="auth-footer">
           
            </div>
        </div>
        '.
        $footer;

    return $ret;