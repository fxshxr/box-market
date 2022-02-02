<?php 
    session_start();
		include 'vars.php';
		addHeader();

        
?>

        
<nav class="nav">
            <ul class="nav__list">
                <li >
                    <a href="index.php" class="nav__link active" >Главная</a>
                </li>
                <li >
                    <a href="buy.php" class="nav__link">купить</a>
                </li>
                <li >
                </li>
                <li>
                <?php
                

                if(isset($_SESSION['cart_list'])){
                    echo '<a href=cart.php class="nav__link">Корзина  '.count($_SESSION['cart_list']) .'</a>';
                } else{
                echo '<a href=cart.php class="nav__link">Корзина</a>';
                }
                ?>
                </li> 
            </ul>
</nav>
        <main>
            <div class="inner__container">
                <div class="about">
                    <h1 class="about__box">
                        о нас
                    </h1>
                    <p class="about__info">
                        LAVANDEBOX - Это сервис по подбору готовых подарков для Вас и Ваших близких.<br> Подарочный набор - это отличный способ порадовать близкого человека. Такой подарок придётся каждому по душе. 
                    <br>Если вам трудно найти подходящий подарок для родных и близких, то наши наборы станут решением этой непростой задачи.
<br>
Мы подготовили на ваш выбор несколько оригинальных коробочек с интересным содержанием.
                    </p>
                </div>
                <div class="news">
                    <h1 class="news__box">
                        ПОСЛЕДНИЕ НОВОСТИ
                    </h1>
                    <br>
                    <?php 
			
            require_once "functions.php";
        
            $link=mysqli_connect($host,$user,$password,$database)
                or die("error" . mysqli_error($link));
        
        
                $query = " SELECT * FROM news ORDER BY id DESC;" ;
        
                
        
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while ($row = mysqli_fetch_assoc($result)){
                    
                    echo "<div class='news__card'>";
                    
                    if ($row ['path'] !='') {
                        echo ' <a  href="post.php?post_id='.$row['id']. '">';
                        echo "<img class='cardimg' src='uploads/". $row ['path'] . "'> <br>";
                        echo '</a>';
                    } 
                    echo ' <a href="post.php?post_id='.$row['id']. '">';
                    echo "<h1 class='news__card__title'>"; 
                    echo $row ['title'] ."</h1>";
                    echo '</a>';
                    
                    
                    
                    
                    
                    $new_text = preg_replace("~(http|https|ftp|ftps)://(.*?)(\s|\n|[,.?!](\s|\n)|$)~", '<a href="$1://$2">$1://$2</a>$3', $row ['par'] );
                    
        
                    echo nl2br("<p class='news_art'>".mb_strimwidth($new_text,0,300,'...')."</p>");
                   
                    
                    echo ' <a class="big" href="post.php?post_id='.$row['id']. '">Подробнее...</a>
                    </div>';
                    
                }
                
            
        ?>
   
        
                </div>
            </div>
            
        </main>
                
        <?php 
    addFooter();
?>