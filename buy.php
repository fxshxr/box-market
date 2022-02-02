<?php 
session_start();
		include 'vars.php';
		addHeader();
       
        
        
        
?>

      
        
<nav class="nav">
            <ul class="nav__list">
                <li >
                    <a href="index.php" class="nav__link" >Главная</a>
                </li>
                <li >
                    <a href="buy.php" class="nav__link active">купить</a>
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
            <div class="au_container">
            <?php 
			
            require_once "functions.php";
        
            $link=mysqli_connect($host,$user,$password,$database)
                or die("error" . mysqli_error($link));
        
        
                $query = " SELECT * FROM catalogs ORDER BY date DESC;" ;
        
                
        
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while ($row = mysqli_fetch_assoc($result)){
                    

                    
                    if ($row ['path'] !='') {
                        echo ' <a  href="post.php?cat_id='.$row['id']. '">';
                        echo '<div class="rb"><div class="pg">';
                        echo "<img class='cardimg_au' src='uploads/". $row ['path'] . "'>";
                        echo '</div>';
                    } 
                    echo ' <a class="buy" href="post.php?cat_id='.$row['id']. '">';
                    
                    echo "<p>". $row ['title'] ."</p>";
                    echo "<p>". $row ['price'] ." ₽ </p>";
                    echo "</a>";
                    echo '<a class="add_to_cart" href="cart.php?course_id='.$row['id'].'">Купить</a>';   
                    echo '</div>';
                                     
                }
                
            
        ?>





            </div>
        </div>
            
            
        </main>
                
        <?php 
    addFooter();
?>
        

        

        