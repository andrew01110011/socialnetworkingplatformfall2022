<?php
define('myHeader', TRUE);
define('myFooter', TRUE);
require "header.php";
?>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/main.css">
<title>Gallery</title>
<main>
  <div class="wrapper-main">
    <section class="section-default">
      <?php
      $datetime = new DateTime;
      $otherTZ = new DateTimeZone('America/New_York');
      $datetime->setTimezone($otherTZ);
      $datetime2 = new DateTime;
      $otherTZ2 = new DateTimeZone('Japan');
      $datetime2->setTimezone($otherTZ2);
      echo "<div class='times'>Boston: " . $datetime->format('Y-m-d h:i:s.A');
      echo "<br>Japan: " . $datetime2->format('Y-m-d h:i:s.A');
      echo "</div><div class='pic-wrapper'>";
      $dir_path = "uploads/";
      $extensions_array = array('jpg','png','jpeg');
      if(is_dir($dir_path)) {
        $files = scandir($dir_path);
        for($i = 0; $i < count($files); $i++) {
          if($files[$i] !='.' && $files[$i] !='..') {
            // get file name
            if ($files[$i] !='.DS_Store') {
              echo "<div class='pic-divs'>File Name: $files[$i]<br>";
            }
            // get file extension
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
            if ($extension !='DS_Store') {
              echo "Size: $extension<br>";
            }
            // check file extension
            if(in_array($extension, $extensions_array)) {
              // show image
              echo "<section class='imgg'><img src='$dir_path$files[$i]' style='height:200px;'></section></div>";
            } else if ($extension !='DS_Store') {
              echo "No Image Avalible because $extension<br>";
            }
          }
        }
      }
      ?>
    </section>
  </div>
</div>
</main>
<?php
require "footer.php";
?>
