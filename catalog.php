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

<?php 
			
            require_once "functions.php";
        
            $link=mysqli_connect($host,$user,$password,$database)
                or die("error" . mysqli_error($link));
        
        
                $query = " SELECT * FROM catalogs ORDER BY date DESC;" ;
        
                
        
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<br>";
                    echo "<div class='news__card'>";
                    
                    if ($row ['path'] !='') {
                        echo ' <a  href="post.php?cat_id='.$row['id']. '">';
                        echo "<img class='cardimg' src='uploads/". $row ['path'] . "'> <br>";
                        echo '</a>';
                    } 
                    echo ' <a href="post.php?cat_id='.$row['id']. '">';
                    echo "<h1 class='news__card__title'>"; 
                    echo $row ['title'] ."</h1>";
                    echo '</a>';
                    
                    
                    
                    
                    
                    
                    $new_text = preg_replace("~(http|https|ftp|ftps)://(.*?)(\s|\n|[,.?!](\s|\n)|$)~", '<a href="$1://$2">$1://$2</a>$3', $row ['par'] );
                    
        
                    echo nl2br("<p class='news_art'>".mb_strimwidth($new_text,0,300,'...')."</p>");
                   
                    
                    echo ' <a class="big" href="post.php?cat_id='.$row['id']. '">Подробнее...</a>
                    </div>';
                    
                }
                
            
        
        ?>
   


</main>
   
<?php 
addFooter();
?>
        

        