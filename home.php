<?php
include_once 'config.php';
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = 1;
}

?>
<html>
<head>
<?php $template->bootstrap(); ?>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
<?php $template->menu(); ?>
</div>
</nav>

<div class="container">
  <h3>Hello, welcome to the app</h3>
<!--
<div class="post-list">
<?php
$list = $post->ViewPosts($page);
while($postRow = $list->fetch(PDO::FETCH_ASSOC)){
?>
<h3><a href="posts/detail.php?id=<?php echo $postRow['id']; ?>"><?php echo $postRow['title']; ?></a></h3></br>
<img src='<?php echo $postRow['image']; ?>'>
<h3><?php echo $postRow['text']; ?></h3></br>
<?php } ?>
</div>

<?php $template->pagination(); ?>
-->
</div>

</body>

<?php $template->bootstrap_footer(); ?>

</html>
