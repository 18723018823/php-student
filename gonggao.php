<?php
if (isset($_POST['submit'])) {
    $text = htmlspecialchars($_POST['text']);
    $line_number = isset($_POST['line_number']) ? intval($_POST['line_number']) : null;
    $action = isset($_POST['action']) ? $_POST['action'] : null;

    // 将用户输入追加到文件，并在末尾添加一个换行符
    $file = '1.txt';
    if (!file_exists($file)) {
        touch($file);
        chmod($file, 0666);
    }
    if (!is_writable($file)) {
        die("File is not writable.");
    }
    file_put_contents($file, $text . "\n", FILE_APPEND);


    $message = "公告发布成功";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Multi-line Input</title>
	<style>
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.success {
			background-color: yellow;
			text-align: center;
			padding: 10px;
			font-weight: bold;
		}
		form {
  text-align: center;
}


		input[type="submit"] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
  margin-top: 20px;
}

	</style>
</head>
<body>
	<div class="center">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<textarea name="text" rows="10" cols="50"></textarea>

			<input type="submit" name="submit" value="发布">

			<?php if (isset($message)): ?>
			<div class="success"><?php echo $message; ?></div>
			<?php endif; ?>
		</form>
	</div>
</body>
</html>
