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
		$new_files = array();
		for ($i = 0; $i < count($files); $i++) 
			if ($files[$i] != "question.gif" and $files[$i] != "index.php" and $files[$i] != "default.css" and $files[$i] != "folder.png" and $files[$i] != "." and $files[$i] != "pdf.png" and $files[$i] != "h.png" and $files[$i] != "c.png" and $files[$i] != "zip.png" and $files[$i] != "cpp.png" and $files[$i] != "sh.png" and $files[$i] != "txt.png")
			array_push ($new_files, $files[$i]);
		$files = $new_files;			
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
								if (strpos($files[$i * 5 + $j], ".pdf") != false)
									echo "<img id = \"file_image\" src = \"pdf.png\"> ";
							else
								if (strpos($files[$i * 5 + $j], ".h") != false)
									echo "<img id = \"file_image\" src = \"h.png\"> ";							
							else	
								if (strpos($files[$i * 5 + $j], ".cpp") != false)
									echo "<img id = \"file_image\" src = \"cpp.png\"> ";
							else	
								if (strpos($files[$i * 5 + $j], ".sh") != false)
									echo "<img id = \"file_image\" src = \"sh.png\"> ";
							else	
								if (strpos($files[$i * 5 + $j], ".zip") != false)
									echo "<img id = \"file_image\" src = \"zip.png\"> ";
							else
								if (strpos($files[$i * 5 + $j], ".c") != false)
									echo "<img id = \"file_image\" src = \"c.png\"> ";
							else
								if (strpos($files[$i * 5 + $j], ".txt") != false)
									echo "<img id = \"file_image\" src = \"txt.png\"> ";
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
				<td id = "files_text_data" align = "center">
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
