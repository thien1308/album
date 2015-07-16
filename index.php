<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
<?php include "connect.php"?>
<div id="body">
	<?php include 'title_bar.php';?>
    <div id="container">
    	<?php
			$query=mysqli_query($conn,"SELECT id,Album_name FROM ALBUM");
			while ($run = mysqli_fetch_array($query)){
					$album_id=$run['id'];
					$album_name=$run['Album_name'];
						$query1=mysqli_query($conn,"select url from PHOTOS where Album_id=$album_id ");
						$run1=mysqli_fetch_array($query1);
						$pic=$run1['url'];
		?>
        <a href="view.php?id=<?php echo $album_id; ?>">
        <div id="viewbox">
        	<img src="upload/<?php echo $pic; ?>" />
            <br/>
            <?php echo $album_name; ?>
        </div>
        </a>
		<?php
			}
		?>
      <div class="clear"></div>
    </div>
</div>
</body>
</html>
