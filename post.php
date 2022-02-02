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
<?php 
			
            require_once "functions.php";
        
            $link=mysqli_connect($host,$user,$password,$database)
                or die("error" . mysqli_error($link));
                if(isset($_GET['post_id'])) {
                    $id = $_GET['post_id'];
                    $query = " SELECT * FROM news Where id = $id " ;
                } else if(isset($_GET['cat_id'])) {
                    $id = $_GET['cat_id'];
                    $query = " SELECT * FROM catalogs Where id = $id " ;
                } else if(isset($_GET['au_id'])) {
                    $id = $_GET['au_id'];
                    $query = " SELECT * FROM authors Where id = $id " ;
                };
                
                
        
                
        
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while ($row = mysqli_fetch_assoc($result)){
                    
                    echo "<div class='news__card'>";
                    
                    if ($row ['path'] !='') {
                        echo "<img class='cardimg__post' src='uploads/". $row ['path'] . "'> <br>";
                    } 
                    echo "<h1 class='news__card__title__post'>"; 
                    echo $row ['title'] ."</h1>";
                    
                    
                    
                    
                    
                    $new_text = preg_replace("~(http|https|ftp|ftps)://(.*?)(\s|\n|[,.?!](\s|\n)|$)~", '<a href="$1://$2">$1://$2</a>$3', $row ['par'] );
                    
        
                    echo nl2br("<p class='news_art__post'>" . $new_text ."</p>");
                   
                    
                    echo "</div>";
                    
                }
                
            
        ?>
   
        
                </div>
            </div>
            
        </main>
                
        <?php 
    addFooter();
?>