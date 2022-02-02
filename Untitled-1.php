<?php 
			
            require_once "functions.php";
        
            $link=mysqli_connect($host,$user,$password,$database)
                or die("error" . mysqli_error($link));
        
        
                $query = " SELECT * FROM authors ORDER BY date DESC;" ;
        
                
        
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while ($row = mysqli_fetch_assoc($result)){
                    echo '<div class="inner__container">
                    <div class="au_container">';

                    
                    if ($row ['path'] !='') {
                        echo ' <a  href="post.php?au_id='.$row['id']. '">';
                        echo '<div class="rb"><div class="pg">';
                        echo "<img class='cardimg_au' src='uploads/". $row ['path'] . "'>";
                        echo '</div>';
                    } 
                    echo ' <a href="post.php?au_id='.$row['id']. '">';
                    echo "<p>"; 
                    echo $row ['title'] ."</p>";
                    echo '</div></div></div></a>';
                    
                }
                
            
        ?>