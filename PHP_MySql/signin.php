

<html>
<head>
<style>
 body{
  background-image :url("D:\vs images/dinner.png");
  background-size:cover; 
 }
 .login-box{
  width:700px;
  float:none;
  margin:130px auto;
 }
 #one{
  background-color: transparent;
 }
 #two{
  background-color: transparent;
 }
 
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

</head>
<body>
 <div style="height:300px; width:300px;margin-left:37%;margin-top:10%;">
          <h2 >Login</h2>
          <form method="post" action="registration.php">
         
              
              <div class="form-group">
               <label>Username</label>
               <input id="one" type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
               <label>Password</label>
               <input id="two" type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        
        
      
 </div>
</body>
</html>