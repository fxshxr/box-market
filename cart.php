<?php 
    session_start();
		include 'vars.php';
		addHeader();
        include 'functions.php';


        if ( isset($_GET['delete_id']) && isset($_SESSION['cart_list']) ) {
            foreach ($_SESSION['cart_list'] as $key => $value) {
                if ( $value['id'] == $_GET['delete_id'] ) {
                    unset($_SESSION['cart_list'][$key]);
                }		
            }
        }
        
if ( isset($_GET['course_id']) && !empty($_GET['course_id']) ) {

	$current_added_course = get_course_by_id($_GET['course_id']);

	// ...
	if ( !empty($current_added_course) ) {

		if ( !isset($_SESSION['cart_list'])) {
			$_SESSION['cart_list'][] = $current_added_course;
		}


		$course_check = false;

		if ( isset($_SESSION['cart_list']) ) {
			foreach ($_SESSION['cart_list'] as $value) {
				if ( $value['id'] == $current_added_course['id'] ) {
					$course_check = true;
				}
			}
		}


		if ( !$course_check ) {
			$_SESSION['cart_list'][] = $current_added_course;
		}

	} else {
		echo '<p>404</p>';
	}
	
}
        
?>
        
<nav class="nav">
            <ul class="nav__list">
                <li >
                    <a href="index.php" class="nav__link" >Главная</a>
                </li>
                <li >
                    <a href="buy.php" class="nav__link">купить</a>
                </li>
                <li >
                </li>
                <li>
                <?php
                

                if(isset($_SESSION['cart_list'])){
                    echo '<a href=cart.php class="nav__link active">Корзина  '.count($_SESSION['cart_list']) .'</a>';
                } else{
                echo '<a href=cart.php class="nav__link active">Корзина</a>';
                }
                ?>
                </li> 
            </ul>
</nav>
<main>
            <div class="inner__container">
            <h1>Корзина</h1>
            <?php if ( isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) !=0 ) : ?>
            <ol>
                
			<?php foreach( $_SESSION['cart_list'] as $course ) : ?>
				<?php echo ' <p><img class="cart_prew" src=uploads/'.$course['path'].' />' ?>
				<li class="cart_list">
					
					<?php echo  $course['title']; ?> | 
					<?php echo $course['price']; ?> ₽  | 
					
					<a href="cart.php?delete_id=<?php echo $course['id'];?>">Удалить из корзины</a>

					
			</p>
				</li>
				
			<?php endforeach; ?>
		</ol>
	
	<?php else : ?>

		<p class="cart_alert">
			Ваша корзина пуста!
		</p>

	<?php endif ; ?>
	<a href="buy.php">Продолжить покупки</a>
	
	<br>
	<?php  if (count($_SESSION['cart_list']) !=0) echo '<br><a  href="order.php">Оформить заказ</a>' ?>

            </div>
</main>
<?php 
    addFooter();
?>