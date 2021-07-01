<form method="POST" action="upload.php" enctype="multipart/form-data">
 <input type="file" name="file">
 <input type="submit" name="Upload">
</form>
<?php
  $files=scandir("uploads");
  for($a=2; $a<count($files);$a++)
  {
      ?>
      <p>
      <?php echo $files[$a];?>
      <a href="uploads/<?php echo $files[$a];?>" download="<?php echo $files[$a];?>"><button>Download</button>
      </a>
      <button onclick="window.location.href='uploads/<?php echo $files[$a];?>'">Preview</button>

      <a href="delete.php?name=uploads/<?php echo $files[$a];?>" style="color:red;"><button>Delete</button>
      </a>
      </p>
      <?php
  }
?>