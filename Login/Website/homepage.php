<?php
  include_once('header.php');
?>
<!-- <?php
  // include_once('nav.php');
?> -->
        
        <div id="content">
          <div id="main">
<?php
  $page='home.php';
  if(!isset($_GET['page']))
  {
    $page = 'home.php';
  }
  else
  {
    $page = $_GET['page'].'.php';
  }
  if(file_exists($page))
  {  
    include_once($page);
  }
  else
  {
    include_once('notfound.html');
  }
?>
          </div>
<?php
  include_once('sidebar.php');
?>  
        
        </div>
<?php
  include_once('footer.php');
?>  
      </div>
    </div>
  </body>
  
</html>  