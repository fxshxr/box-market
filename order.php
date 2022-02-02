<?php 
    session_start();
		include 'vars.php';
		addHeader();
        include 'functions.php';
        
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
            <div class="au_container">
    

	<h1>Заказ</h1>

	<form>
		
		<?php if ( isset($_GET['title']) ) : ?>
			<p><?php echo $_GET['title']; ?></p>
		<?php elseif ( isset($_SESSION['cart_list']) ) : ?>
			<ol>
				<?php foreach( $_SESSION['cart_list'] as $course ) : ?>

					<li><?php echo $course['title']; ?> | <?php echo $course['price']; ?> ₽</li>

				<?php endforeach; ?>
			</ol>

			<p>
				<a href="cart.php">Изменить заказ</a>
			</p>
		<?php endif; ?>

        <form class="anketa__form">

<!-- Hidden Required Fields -->
<input type="hidden" name="project_name" value="Заказ Psyllabus">
<input type="hidden" name="admin_email" value="psyllabu@psyllabus.biz">
<input type="hidden" name="form_subject" value="Заявка с сайта PSYLLABUS">
<input type="hidden" name="Заказ" value=" <?php if ( isset($_GET['title']) ) : ?>
			<p><?php echo $_GET['title']; ?></p>
		<?php elseif ( isset($_SESSION['cart_list']) ) : ?>
			<ol>
				<?php foreach( $_SESSION['cart_list'] as $course ) : ?>

					<li><?php echo $course['title']; ?> | <?php echo $course['price']; ?> ₽</li>

				<?php endforeach; ?>
			</ol>

		<?php endif; ?> ">
<!-- END Hidden Required Fields -->

<input type="text" name="ФИО" placeholder="ФИО" required><br>
<input type="text" name="E-mail" placeholder="Электронная Почта" required><br>
<input type="text" name="Телефон" placeholder="Телефон" required><br>
<textarea name="Комментарии" placeholder="Ваше Сообщение" id="" cols="30" rows="10"></textarea><br>
<br>

<br>
<button class="button">Оформить заказ</button>

</form>
	





	</div>
        </div>
            
            
        </main>
                
        <?php 
    addFooter();
?>
        

	
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>