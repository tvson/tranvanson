<?php
if (isset($_GET['page']) && ($_GET['page']) != '') {
  $post = $_GET['page'];
}
else{
  $post = '';
}
if ($post == 'dangnhap') {
  include('module/page/dangnhap.php');
}
elseif ($post == 'dangky') {
  include('module/page/dangky.php');
}
elseif ($post == 'cauhoi') {
	include('module/page/cauhoi.php');
}
elseif ($post == 'baihoc') {
	include('module/page/baihoc.php');
}
elseif ($post == 'nguphap') {
	include('module/page/nguphap.php');
}
elseif ($post == 'grammer') {
	include('module/page/grammer.php');
}
elseif ($post == 'game1') {
	include('module/page/game1.php');
}
elseif ($post == 'game2') {
	include('module/page/game2.php');
}
else{
  include('module/page/trangchu.php');
}
?>