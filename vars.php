<?php


function addHeader()
{
    
    echo '<!DOCTYPE html>
    <html lang="ru">
    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <meta name="yandex-verification" content="5695efdbb7980707" />
        <title>LavandeBox</title>
        <meta id="vp" name="viewport" content="width=device-width, initial-scale=1">
		
		<script>
			if (screen.width < 1080)
{
    var mvp = document.getElementById("vp");
    mvp.setAttribute("content","initial-scale=1");
}
		</script>

        
    </head>
    <body>
        <div class="container">
            <header class="header">
               
                <div class="logo">
                    <a href="index.php" class="logo_link">
                        <img src="img/logo.png" alt="">
                    </a>
                    
                </div>
              
                
            </header>';
}

function addFooter()
{
    
    echo '        <footer class="footer">
    <div class="inner__container">
    <ul class="footer__info">

        <li> LAVANDE BOX </li><br><br>
        <li>
            <a href="mailto:LAVANDEBOX@gmail.com "> lavandebox@gmail.com </a>
        </li>
        <br>
        <li>
            <a href="https://www.instagram.com/lavande_box/"> INSTAGRAM </a>
        </li>
        
    </ul>
</div>

</footer>

<div class="subfooter">
    
    <p class="copy">
        © Lavande Box 2022 г. <br><br>
        <a href="admin.php" class="right">Вход для администратора</a>
    </p> 
    
    </div>
 </div>
        






</body>
</html>';

}
?>
