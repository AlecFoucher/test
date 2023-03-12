<!DOCTYPE html>
<html>
<head>
	<title>Smileys</title>
	<meta charset="UTF-8">
	<style>
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		.container span {
			font-size: 36px;
			margin: 10px;
		}
		.pagination {
			display: flex;
			justify-content: center;
			margin-top: 20px;
		}
		.pagination a {
			display: inline-block;
			padding: 10px;
			margin: 5px;
			background-color: #ddd;
			color: #333;
			text-decoration: none;
			border-radius: 5px;
		}
		.pagination a.active {
			background-color: #007bff;
			color: #fff;
		}
	</style>
</head>
<body>
	<?php
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
	?>
	<div class="container">
		<?php
			$smiley_start = ($page - 1) * 256 + 128512;
			$smiley_end = $smiley_start + 256;
			for ($i = $smiley_start; $i < $smiley_end; $i++) {
				echo '<span>&#' . $i . ';</span>';
			}
		?>
	</div>
	<div class="pagination">
		<?php
			$total_pages = 4;
			for ($i = 1; $i <= $total_pages; $i++) {
				if ($i == $page) {
					echo '<a href="#" class="active">' . $i . '</a>';
				} else {
					echo '<a href="?page=' . $i . '">' . $i . '</a>';
				}
			}
		?>
	</div>
</body>
</html>
