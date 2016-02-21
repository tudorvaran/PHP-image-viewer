<html>
	<head>
		<title>Explorer</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="default.css">
	</head>
	<?php
		error_reporting(E_ALL | E_STRICT);
		ini_set('display_errors', 'On');
		$files = scandir ( "." , 1);
	?>
	<body >
		<?php
		for($i = 0; $i <= count($files) / 5; $i = $i + 1) {
			?>
			<table class = "files_table">
			<tr>
			<?php
			for($j = 0; $j < min(5, count($files) - $i * 5); $j = $j + 1) {
					?>					
					<td id = "file_image_data">
						<a href = "<?php echo ($files[$i * 5 + $j]); ?>" >
						<?php 
							if (strpos($files[$i * 5 + $j], ".") == false)
								echo "<img id = \"file_image\" src = \"folder.png\"> ";
							else 
								if (strpos($files[$i * 5 + $j], ".png") != false or strpos($files[$i * 5 + $j], ".jpg") != false or strpos($files[$i * 5 + $j], ".jpeg") != false)
									echo "<img id = \"file_image\" src = \"".$files[$i * 5 + $j]."\" > ";
							else
								echo "<img id = \"file_image\" src = \"question.gif\" >"; ?>
						</a>
					</td>			
			<?php }?>
			</tr>			
			<tr>	
			<?php
			for($j = 0; $j < min(5, count($files) - $i * 5); $j = $j + 1) {
				?>					
				<td id = "files_text_data">
					<?php echo "<a href = \"".$files[$i * 5 + $j]."\" >" .$files[$i * 5 + $j]. "</a>"; ?>
				</td>																					
					<?php
			}				
			?>
			</tr>
			</table>
			<?php
		}
		?>
	
	</body>
</html>
