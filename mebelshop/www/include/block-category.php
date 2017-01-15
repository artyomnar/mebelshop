<?php
	defined('myeshop') or die('Доступ запрещён!');
?>
<div id="block-category">
    <p class="header-title" >Категории товаров</p>
    <ul>
        <li><a id="index1" ><img src="/images/soft-furniture-icon.jpg" id="table-images" />Мягкая мебель</a>
            <ul class="category-section">
                <li><a href="view_cat.php?type=soft_furniture"><strong>Все модели</strong> </a></li>
                    <?php
                        $result = mysql_query("SELECT * FROM category WHERE type='soft_furniture'",$link);
    
                        If (mysql_num_rows($result) > 0){
                            $row = mysql_fetch_array($result);
                            do{
	                           echo '    
                                    <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>            
                                ';
                            }
                            while ($row = mysql_fetch_array($result));
                        } 	
                    ?>
            </ul>
        </li>

        <li><a id="index2" ><img src="/images/bed-icon.jpg" id="table-images" />Кровати и тахты</a>
            <ul class="category-section">
                <li><a href="view_cat.php?type=bed"><strong>Все модели</strong> </a></li>
                    <?php
                        $result = mysql_query("SELECT * FROM category WHERE type='bed'",$link);
                        If (mysql_num_rows($result) > 0){
                            $row = mysql_fetch_array($result);
                            do{
	                           echo '  
                                    <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>    
                                ';
                            }
                            while ($row = mysql_fetch_array($result));
                        } 	
                    ?>
                </ul>
            </li>

            <li><a id="index3" ><img src="/images/table-icon.jpg" id="table-images" />Столы</a>
                <ul class="category-section">
                    <li><a href="view_cat.php?type=notepad"><strong>Все модели</strong> </a></li>
                        <?php    
                            $result = mysql_query("SELECT * FROM category WHERE type='table'",$link);      
                            If (mysql_num_rows($result) > 0){
                                $row = mysql_fetch_array($result);
                                do{
	                               echo '    
                                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>    
                                    ';
                                }
                                while ($row = mysql_fetch_array($result));
                            } 	
                        ?>
                    </ul>
            </li>
            
            <li><a id="index4" ><img src="/images/case-icon.jpg" id="table-images" />Шкафы</a>
                <ul class="category-section">
                    <li><a href="view_cat.php?type=case"><strong>Все модели</strong> </a></li>
                        <?php    
                            $result = mysql_query("SELECT * FROM category WHERE type='case'",$link);      
                            If (mysql_num_rows($result) > 0){
                                $row = mysql_fetch_array($result);
                                do{
	                               echo '    
                                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>    
                                    ';
                                }
                                while ($row = mysql_fetch_array($result));
                            } 	
                        ?>
                </ul>
            </li>
            
            <li><a id="index5" ><img src="/images/comode-icon.jpg" id="table-images" />Комоды</a>
                <ul class="category-section">
                    <li><a href="view_cat.php?type=comode"><strong>Все модели</strong> </a></li>
                        <?php    
                            $result = mysql_query("SELECT * FROM category WHERE type='comode'",$link);      
                            If (mysql_num_rows($result) > 0){
                                $row = mysql_fetch_array($result);
                                do{
	                               echo '    
                                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>    
                                    ';
                                }
                                while ($row = mysql_fetch_array($result));
                            } 	
                        ?>
                </ul>
            </li>
            
            <li><a id="index6" ><img src="/images/chair-icon.jpg" id="table-images" />Стулья и табуреты</a>
                <ul class="category-section">
                    <li><a href="view_cat.php?type=chair"><strong>Все модели</strong> </a></li>
                        <?php    
                            $result = mysql_query("SELECT * FROM category WHERE type='chair'",$link);      
                            If (mysql_num_rows($result) > 0){
                                $row = mysql_fetch_array($result);
                                do{
	                               echo '    
                                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>    
                                    ';
                                }
                                while ($row = mysql_fetch_array($result));
                            } 	
                        ?>
                </ul>
            </li>
        </ul>
    </div>