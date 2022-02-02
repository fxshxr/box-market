<?php 
session_start();
		include 'vars.php';
		addHeader();
       
?>

        
<nav class="nav">
            <ul class="nav__list">
                <li >
                    <a href="index.php" class="nav__link " >Главная</a>
                </li>
                <li >
                    <a href="catalog.php" class="nav__link">каталог</a>
                </li>
                <li >
                    <a href="authors.php" class="nav__link">авторы</a>
                </li>
                <li >
                    <a href="buy.php" class="nav__link ">купить</a>
                </li>
                <li >
                    <a href="contacts.php" class="nav__link active">контакты</a> 

                </li>
                <li>
                <?php
                if(isset($_SESSION['cart_list'])){
                    echo '<a href=cart.php class="nav__link">Корзина:'.count($_SESSION['cart_list']) .'</a>';
                } else{
                echo '<a href=cart.php class="nav__link">Корзина</a>';
                }
                ?>
                </li>
            </ul>
</nav>
<main>
            <div class="inner__container">
            <div class="contacts">
                <p>Генеральный директор: <b>Тишков Филипп Александрович</b></p>
                <p>Телефон:<a href="tel:+7 919 992 39 64"> +7 919 992 39 64</a></p>
                <br>
                <p>По вопросам сотрудничества и
                приобретения изданий: <b>Тишкова Татьяна Олеговна</b></p>
                <p>Телефон: <a href="tel:+7 985 211 54 14"> +7 985 211 54 14</a></p>
                <br>
                <p>E-mail: <a href="mailto:psyllabuspublishing@gmail.com"> psyllabuspublishing@gmail.com</a></p>
            </div>
            </div>
            
            
        </main>
<?php 
    addFooter();
?>