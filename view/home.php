<?php 
	include 'styles/header.php';
?>

<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "PHP OOP Fundamentals"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
	Model View Controller ( MVC ) Design Pattern...
	<span style="float: right;">
		<?php 
		date_default_timezone_set('Asia/Dhaka');
		echo "Time ".date("h:i:s a");
		?>
	</span>
	<hr>





<section class="main_right">
	<table class="tblone">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Department</th>
			<th>Age</th>
		</tr>

		<?php
			$i = 0;
			foreach ($user as $key => $value) {
				$i++;
		?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['dept'] ?></td>
				<td><?php echo $value['age'] ?></td>
			</tr>
		<?php } ?>
	</table>
</section>





<?php 
	include 'styles/footer.php';
?>