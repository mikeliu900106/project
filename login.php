<html>
    <head>
        <link rel="stylesheet" href="style/login.css">
    </head>
    <body>



        <form action="Enter.php" method="post" >
            <div class="LoginBox">
                <h1 style="font-size: 40px;">Log In</h1>
                <!-- 帳密輸入欄 -->
                <input class="Login_text" type="text" placeholder="Username" name = "login_username"> <br>
                <a href="forgetPW.php" style="font-size: 14px; margin-left: 260px; color: rgb(177, 169, 169);">Forget your password?</a> <br>
                <input class="Login_text" type="password" placeholder="Password" name = "login_password"/> <br> <br>

                <!-- 註冊 提交 -->
                <div class="bottom_row">
                    <a href="register.php" class="register" style="border-radius: 35px; color: #333; font-weight: bold;">Register</a> 
                    <input class="Submit_button " type="submit" value="Submit" />
                </div>

                <!-- 回首頁 -->
                <a href = "index.php" ><img src="image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px" ></a>
            </div>
        </form>
    </body>
    <?php
        
    
    ?>
</html>