<?php 
	require_once __DIR__. "/autoload/autoload.php";
	$category = $db->fetchAll("category");
?>
 
<?php require_once __DIR__. "/layouts/header.php";?>
     <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Chào mừng đến với Admin !</h1>
            <ol class="breadcrumb">
            	<li>
            		<i class="fa fa-dashboard"></i> <a href="index.php">Danh sách</a>
            	</li>
            </ol>
        </div>    
                       
    </div>                
<?php require_once __DIR__. "/layouts/footer.php";?>     