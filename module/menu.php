
<?php
$servername = "localhost";
$database = "webenglish";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database) or die('errorss');
mysqli_set_charset($conn, 'UTF8');
$sql = "select * from menu";
$query = mysqli_query($conn,$sql);
?>
<div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="?page=''">
          <img src="images/lg.png"width="50" height="30"alt="">
        </a> </li>
        <li class="active"><a href="?page=dangky"><strong style="color: black;">ĐĂNG KÝ</strong><span class="sr-only">(current)</span></a> </li>
        <li class="active"><a href="?page=dangnhap"><strong style="color: black;">ĐĂNG NHẬP</strong></a> </li>
        
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><strong style="color: black;">CHI TIẾT KHÓA HỌC</strong><span class="caret"></span></a>
          <ul class="dropdown-menu">
             <?php
         $i = 1;
         while ($num = mysqli_fetch_array($query)){  
         ?>
        <li>
          <?php
          $chuyen = $num['TenMenu'];
          if ($chuyen == 'Từ vựng') {
            echo '<a href= "?page&page=nguphap">Từ Vựng
          </a> ';
          }elseif ($chuyen == 'Ngữ pháp') {
            echo '<a href= "?page&page=grammer">Ngữ pháp
          </a> ';
          }else{
            echo '<a href= "?page&page=baihoc">Video</a>';
          };
          ?>
        
         
        </li>
            <?php
            $i++;
          }
            ?>

          </ul>
        </li>

        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><strong style="color: black;">GAME</strong></a>
          <ul class="dropdown-menu">
           <li>
            <a href="?page&page=game1">
              <strong style="color: black;">GAME1</strong>
            </a>
            
           </li>
           <li>
             <a href="?page&page=game2">
              <strong style="color: black;">GAME2</strong>
             </a>
           </li>
          </ul>
        </li>
      </ul>
    </div>