<?php 
   include('session.php'); 
?> 
<html> 
<head> 
   <title>Welcome</title> 
   <style>
      body {
         font-family: Arial, sans-serif;
         background: url('background.jpg') no-repeat center center fixed; /* Add your background image here */
         background-size: cover;
         color: white;
         text-align: center;
         margin: 0;
         padding: 0;
      }
      h1 {
         margin-top: 50px;
         font-size: 3em;
         color: #FFD700; /* Gold color */
      }
      h2 a {
         text-decoration: none;
         color: #FFD700;
         background-color: #333;
         padding: 10px 20px;
         border-radius: 5px;
      }
      h2 a:hover {
         background-color: #555;
      }
   </style>
</head> 
<body>
   <h2><a href="logout.php">Sign Out</a></h2>
   <h2><a href="halaman-utama.html">Masuk</a></h2>
</body> 
</html>
