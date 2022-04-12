<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lalala</title>
</head>
<body>
<h2>regiist Form</h2>

<form action="../system/sys-registrasi.php" method="post">
  <table>

  <td>
    <tr>
      <div class="imgcontainer">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/President_Vladimir_Putin.jpg" width="70" height="70" alt="Avatar" class="avatar">
      </div>
    </td>
    <td>
      <tr>
      <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
  </div>
    </tr>
      
</td>
  
<td>
  <tr>
      <label for="psw"><b>Password </b></label>
    <input type="text" placeholder="Enter Password" name="password" required>  
  </tr>
</td>
  <button type="submit" name="regist">registrasi</button>
<td>
  <tr>
     <div class="container" style="background-color:#f1f1f1">
    <a href="../index"><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  </tr>
</td> 
  </table>
</form>

</body>
</html>