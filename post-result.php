<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
      
    <h1>Post Result</h1>

<?php
echo getDisplay();
include "view-footer.php";

function getDisplay() {
     if (isset($_POST['my-name'])) {
  return "<p>The value set is:</p>" . echo $_POST['my-name'];
} else {
return "<p>Nothing posted to the page</p>";
} 
}
?>
