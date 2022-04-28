<?php
  $number_of_episodes = $_POST["episode-quantity"];
  $time_required = (50/60) * $number_of_episodes;
?>
<?php echo "The length of time it would take you to watch " . $number_of_episodes . " Star Trek episodes would be approximately " . round($time_required, 2) . " hours" ?>