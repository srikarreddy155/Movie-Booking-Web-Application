<html>
<body>
<?php
include('header.php');
?>

<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3" style="font-size:15px">
					<h2 style="color:#555;">UPCOMING MOVIES</h2>
					<?php 
					$qry3=mysqli_query($con,"SELECT * FROM tbl_news LIMIT 5");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
				<div class="content-left">
					<div class="listimg listimg_1_of_2">
						 <img src="admin/<?php echo $n['attachment'];?>">
					</div>
					<div class="text list_1_of_2">
						  <div class="extra-wrap">
						  	<span style="text-color:#000" class="data"><strong><?php echo $n['name'];?></strong><br>
						  	<span style="text-color:#000" class="data"><strong>Cast :<?php echo $n['cast'];?></strong><br>
                                <div class="data">Release Date :<?php echo $n['news_date'];?></div>
                                
                                
                                
                                <span class="text-top"><?php echo $n['description'];?></span>
                          </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php
				}
				?>
				
			
		</div>	
		
		<div class="listview_1_of_3 images_1_of_3"></div>
		<?php include('movie_sidebar.php');?>
	</div>
</div>
<?php include('footer.php');?>
</div>
<?php include('searchbar.php');?>