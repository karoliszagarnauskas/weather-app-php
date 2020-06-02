<!-- <?php
include_once 'database_handler.php';
?>
<script type="text/javascript">
if (`${data.weather[0].main}` == "Clouds") {
  </script>
  <?php
  $sql = "SELECT * FROM items WHERE item_id=1;";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck >0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo  $row['item'] . "<br>";
    }
  }
  ?> -->
