<html>
<head>
	<style>
		.eror{color: #F0000;}
	</style>
</head>
<body>
	<?php 
	$namaErr = $emailErr = $genderErr = $websiteErr = "";
	$nama = $email = $gender = $comment = $website ="";
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	if (empty($_POST["nama"])) {
	 		$namaErr = "Nama harus di isi";
	 	}else{
	 		$nama = test_input($_POST["nama"]);
	 	}

	 if (empty($_POST["email"])) {
	 	$emailErr = "Email harus di isi";
	 }else{
	 	$email = test_input($_POST["email"]);

	 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 		$emailErr = "Format email tidak sama";
	 	}
	 }

	 if (empty($_POST["website"])) {
	 	$website = " ";
	 }else{
	 	$website = test_input($_POST["website"]);
	 }

	 if (empty($_POST["comment"])) {
	 	$comment = " ";
	 }else{
	 	$comment = test_input($_POST["comment"]);
	 }

	 if (empty($_POST["gender"])) {
	 	$genderErr = "Tentukan Jenis Kelamin anda";
	 }else{
	 	$gender = test_input($_POST["gender"]);
	 }
	 }
	 function test_input($data){
	 	$data = trim($data);
	 	$data = stripslashes($data);
	 	$data = htmlspecialchars($data);
	 	return $data;
	 }
	 ?>

	 <h2>Posting Komentar</h2>

	 <p><span class="eror">*harus di isi</span></p>

	 <form method="post" action="<?php 
	 echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	 <table>
	 	<tr>
	 		<td>NAMA : </td>
	 		<td><input type="text" name="nama">
	 			<span class="eror">* <?php echo "$namaErr"; ?></span>
	 		</td>
	 	</tr>

	 	<tr>
	 		<td>E-Mail : </td>
	 		<td><input type="text" name="email">
	 			<span class="eror">* <?php echo "$emailErr";  ?></span>
	 		</td>
	 	</tr>

	 	<tr>
	 		<td>Website : </td>
	 		<td><input type="text" name="website">
	 			<span class="eror">* <?php echo "$websiteErr"; ?></span>
	 		</td>
	 	</tr>

	 	<tr>
	 		<td>Komentar : </td>
	 		<td><textarea name="comment" rows="5" cols="40"></textarea></td>
	 	</tr>

	 	<tr>
	 		<td>Gender</td>
	 		<td>
	 			<input type="radio" name="gender" value="L">Laki-Laki
	 			<input type="radio" name="gender" value="P">Perempuan
	 			<span class="eror">*<?php echo "$genderErr"; ?></span>
	 		</td>
	 	</tr>

	 	<td><input type="submit" name="submit" value="Submit"></td>
	 </table>
	 	
	 </form>

	 <?php
	  echo "<h2>Data yang anda isikan";
	  echo "<table border = '1';>
	  <tr>
	  <th>Nama</th>
	  <th>E-mail</th>
	  <th>Website</th>
	  <th>Komentar</th>
	  <th>Gender</th>
	  </tr>
	  <tr>
	  ";
	  echo "<th>"; 
	  echo $nama ;
	  echo "</th>";   
	  echo "<th>";     
	  echo $email ;  
	  echo "</th>";    
	  echo "<th>";     
	  echo $website ;    
	  echo "</th>";    
	  echo "<th>";     
	  echo $comment ;    
	  echo "</th>";    
	  echo "<th>";     
	  echo $gender ;   
	  echo "</th>";

	  echo "</tr>";
	  echo "</table>";


	 ?>
</body>
</html>