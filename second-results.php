<?php
  $available_time = $_POST["available-time"];
  $possible_episodes = (60 * $available_time) / 50;
?>
<?php echo "In " . $available_time . " hours, you could watch approximately  " . round($possible_episodes, 2) . " Star Trek episodes."?>