<?php
$servername = "localhost";
$database = "webenglish";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database) or die('errorss');
mysqli_set_charset($conn, 'UTF8');
$sql = "select * from tuvung";
$query = mysqli_query($conn,$sql);
?>
<table class="table table-bordered" style="background-color: #fff;">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col"><p style="text-align:center;">Tiếng Anh</p></th>
      <th scope="col"><p style="text-align: center;">Tiếng Việt</p></th>
    </tr>
  </thead>
  <tbody>
       <?php
         $i = 1;
         while ($num = mysqli_fetch_array($query)){  
         ?>
    <tr>
      <th scope="row"><?php echo $i ;?></th>
      <td><?php echo $num['english']?></td>
      <td> <p style="color: red;"><?php echo$num['vietsub']?></p></td>
    
    </tr>
    <?php
    $i++;
  }
    ?>
  </tbody>
</table>
