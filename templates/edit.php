<?php
$this->layout('layout');
include($_SERVER['DOCUMENT_ROOT'].'/app/example/config.php');
$id = $_GET['id'];

if(isset($_POST['btn-edit'])){
$id = $_GET['id'];
$title = trim($_POST['title']);
$text = trim($_POST['text']);
$image = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);
$post->EditPost($id,$title,$text,$image);
header('location:detail.php?id='.$id);
}

$sql = $post->ViewPostsDetail($id);
$post = $sql->fetch(PDO::FETCH_ASSOC);
?>

<h3>Edit</h3>
<div class="form">
<form method="post" enctype="multipart/form-data">
Image: <input type="file" name="image" value="<?php echo $post['image']; ?>"><br>
Title: <input type="text" name="title" value="<?php echo $post['title']; ?>"><br>
Text: <input type="text" name="text" value="<?php echo $post['text']; ?>"><br>
<button type="submit" name="btn-edit">Finish</button>
</form>
</div>
