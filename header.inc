<nav class="navbar navbar-expand bg-primary navbar-dark justify-content-between">
    <h1> <img src="mylogo.png"></h1> 
    <h1 style="color:White">College Result Management System</h1>
   <?php 
   if (isset($_SESSION["loggedinAdmin"]) || isset($_SESSION['loggedinstud'])){
      ?>
      <script>
        function lgout(){
         window.location.href="logout.php";}
      </script>
    <?php
    echo "<button onclick='lgout()' class='btn btn-secondary btn-sm'>Log Out</button>";
    }
  if(!(isset($_SESSION["loggedinAdmin"]) || isset($_SESSION['loggedinstud'])))
    {
      echo "<span class='badge badge-pill badge-primary'>Please login</span>";
    }
   ?>
</nav>
<br><br>




