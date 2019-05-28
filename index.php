<?php 
    include "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title> Регулярки </title>
</head>
<body>
    <p>1. Из полного имени файла (например, picture.jpg) получите его расширение (например, jpg)</p> 
	<form method="POST"> 
		<p><input placeholder="Введите название файла" name="file"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['file'])){ 
			$filename=$_POST['file']; 
			echo format($filename); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
    </div>
    
    <p>2. По полному имени файла проверьте соответствует ли оно: а) архиву, б) аудиофайлу, в) видеофайлу, г) картинке</p> 
	<form method="POST"> 
		<p><input placeholder="Введите название файла" name="filename"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['filename'])){ 
			$file=$_POST['filename']; 
			echo check($file); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
    </div>
    
    <p>3. В произвольном HTML-коде найдите строку, заключенную в теги title</p> 
	<form method="POST"> 
		<p><input placeholder="Введите" name="file1"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['file1'])){ 
			$file1=$_POST['file1']; 
			echo ex3($file1); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
    </div>
    
    <p>4. В произвольном HTML-коде найдите все ссылки в тегах a (атрибут href) </p> 
	<form method="POST"> 
		<p><input placeholder="Введитe" name="file2"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['file2'])){ 
			$file2=$_POST['file2']; 
			echo ex4($file2); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
    </div>
    
    <p>5. В произвольном HTML-коде найдите все ссылки на картинки в тегах img (атрибут src) </p> 
	<form method="POST"> 
		<p><input placeholder="Введите" name="file3"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['file3'])){ 
			$file3=$_POST['file3']; 
			echo ex5($file3); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
    </div>
    
    <p>6. В произвольном тексте найдите и подсветите с помощью тега strong заданную строку</p> 
	<form method="POST"> 
        <p><input placeholder="Введите строку" name="file4"></p> 
        <p><input placeholder="Введите строку для поиска" name="file5"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['file4'])&&isset($_POST['file5'])){ 
            $file4=$_POST['file4']; 
            $file5=$_POST['file5']; 
			echo ex6($file4, $file5); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

    <p>7. В произвольном тексте найдите определенный набор текстовых смайликов :), ;), :( на соответствующие им картинки </p> 
	<form method="POST"> 
		<p><input placeholder="Введите" name="file7"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['file7'])){ 
			$file7=$_POST['file7']; 
			echo ex7($file7); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
    </div>

    <p>8. В заданной строке избавьтесь от случайных повторяющихся пробелов. </p> 
	<form method="POST"> 
		<p><input placeholder="Введите" name="file8"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['file8'])){ 
			$file8=$_POST['file8']; 
			echo ex8($file8); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
    </div>
    
</body>
</html>