<!DOCTYPE html>
<!-- ICS2O-Assign3-PHP-StarTrekTime -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This program will calculate the amount of time it will take to watch a certain number of star trek episodes and additionally the number of star trek episodes that can be viewed in a certain amount of time.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Star Trek episodes and the fleeting nature of time.</title>
 
    <!-- These lines of code permit the visualization of the favicon, an element commonly employed in the creation of a website.  -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- This function will employ the use of the "echo" function in order to display a header for the page. -->
  <?php 
    echo "<h1>Star Trek episodes and the fleeting nature of time.</h1>";
  ?>

  <!-- some nice text about star trek and time to introduce the user to what they are about to be party to -->
  <?php 
    echo "<p>Time. A fickle thing. Without our careful vigilance, our swift maintenance of it, time could pass through our fingers swifter than the sands that pass through the hourglasses that dictate the span of our lives. Time, such an important concept, yet so difficult to grasp for many. What truly makes up time? Well, dear user, today we shall endeavour to place a new significance that may very well distort our very perception of time; we will use time in relation to Star Trek episodes.</p>"
  ?>
  <br>

  <!-- image of the crew of the starship enterprise -->
  <img src="./images/startrekcrew.jpg" alt="The Crew of the Starship Enterprise">
  <br>
  <br>
  
  <!-- Introductory text to what Star Trek is -->
  <?php
    echo "<p>For those of you who do not know, Star Trek was a sci-fi television series that ran from 1966 to 1969. The series follows the crew of the starship Enterprise, a Starfleet vessel, and the adventures of the crew as they partake on a five year mission to, as the introduction of the show declares, 'explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before'. The series was created by Gene Roddenberry. Though the series is over 50 years old, it still remains popular and a recognizable name to this day; with over 6 television series and 9 films created in the same universe, the most recent of which will premiere on May 6th, 2022, it is easy to see the legacy that this show has produced, though the Original Series was somewhat short-lived.</p>"
  ?>
  <br>

  <!-- first function header for more organization and visual separation -->
  <?php 
    echo "<h3>Function One: Time Required for Star Trek Episode Viewing</h3>"
  ?>

  <!-- a little image of the bridge crew once again. just because i think they're cool. this code contains the image lookup and displays it onto the page -->
  <img src="./images/startrekplanetsidebridgecrew.jpg" alt="Star Trek Main Bridge Crew Planetside">
  <br>
  <br>

  <!-- text describing the function of this web page section-->
  <?php 
    echo "<p>Ah yes, I see! You are interested in watching Star Trek, however you need to plan the time accordingly in your life. I admire the dedication to order. Shall we spare some time and energy and simply proceed to the function? I believe we shall.</p>"
  ?>
  <br>

  <!-- This function creates a form which will gather information from the user through the utilization of a text field. -->
  <form action="./first-results.php" method="post" target="duration-of-time">
    <label for="episode-quantity">Please input the quantity of episodes you desire to view</label>
    <input type="number" id="episode-quantity" step="0.01" min="0.01" placeholder="Episode Quantity" name="episode-quantity">
    <br>
    <br>
    <input type="submit" value="Calculate Length of Time">
    <br>
    <br>
  </form>

  <!-- This function contains the frame to which the results will be cast. -->
  <iframe id="duration-of-time" name="duration-of-time">
  </iframe>
  <br>

  <!-- second function header -->
  <?php 
    echo "<h3>Function Two: Number of Episodes Viewable in a Specific Time Period</h3>"
  ?>
  <br>

  <!-- a little bit more imagery, just for fun. This code contains the lookup for the image and will display it on the website -->
  <img src="./images/startrekmaincast.png" alt="The main crew of the show">
  <br>
  <br>

  <!-- Some text explaining the function of this section, just as a little introduction. -->
  <?php 
    echo "<p>As we know, time is very complicated. Sometimes, you only have a limited amount of time, but alas this does not stop the Star Trek Grind. Enter the amount of time you have available to you in hours, and the computer will calculate how many episodes can be viewed in this time frame in a swift manner. </p>"
  ?>
  <br>

  <!-- This form collects information from the user about the time available to them in hours -->
   <form action="./second-results.php" method="post" target="episodes-possible-with-time">
    <label for="available-time">Please input the amount of time in hours you would like to watch for.</label>
    <input type="number" id="available-time" step="0.01" min="0.01" placeholder="Time (h) Watching" name="available-time">
    <br>
    <br>
    <input type="submit" value="Calculate Quantity of Episodes">
    <br>
    <br>
  </form>
  
  <!-- the frame in which the results will be cast -->
  <iframe id="episodes-possible-with-time" name="episodes-possible-with-time">
  </iframe>
</body>
</html>