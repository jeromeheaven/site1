<?php
include("includes/config.php");

// session_destroy();
//Delete this later because it maunally logs you out(temp until create login button)
if(isset($_SESSION['userLoggedIn'])) {
$userLoggedIn = $_SESSION['userLoggedIn'];

}
else {
  header("Location: register.php");
}


 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home - Warble Music</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

<body>

    <div id="mainContainer">

          <div id="topContainer">

                <div id="navBarContainer">
                    <nav class="navBar">

                        <a href="index.php" class="logo">
                              <img src="assets/images/logo.png" alt="logo">
                        </a>

                        <div class="group">

                          <div class="navItem">
                            <a href="search.php" class="navItemLink">
                              <img src="assets/images/icons/search.png" alt="search image" class="icon">
                              Search</a>
                          </div>


                          <div class="navItem">
                            <a href="browse.php" class="navItemLink">Browse</a>
                          </div>



                          <div class="navItem">
                            <a href="yourMusic.php" class="navItemLink">Your Music</a>
                          </div>


                          <div class="navItem">
                            <a href="profile.php" class="navItemLink">My Profile</a>
                          </div>





                        </div>

                        <div class="group">


                        </div>



                    </nav>
                </div>


        </div>


          <div id="nowPlayingBarContainer">
                    <div id="nowPlayingBar">
                          <div id="nowPlayingLeft">
                            <div class="content">
                              <span class="albumLink">
                                <img src="http://www.unicorngamer.com/images/iTunesArtwork.png" alt="Album Artwork" class="albumArtwork">
                              </span>

                              <div class="trackInfo">

                                <span class="trackName">
                                    <span>Graduation</span>
                                </span>

                                <span class="artistName">
                                    <span>Kanye West</span>
                                </span>




                              </div>
                            </div>
                        </div>

                            <div id="nowPlayingCenter">

                                <div class="content playerControls">


                                    <div class="buttons">
                                      <button class="controlButton repeat" title="Repeat button">

                                        <img src="assets/images/icons/repeat.png" alt="Shuffle"

                                      </button>


                                      <button class="controlButton previous" title="Previous button">

                                        <img src="assets/images/icons/previous.png" alt="Previous"

                                      </button>


                                      <button class="controlButton play" title="Play button">

                                        <img src="assets/images/icons/play-btn.png" alt="Play"

                                      </button>

                                      <button class="controlButton pause" title="Pause button" style="display: none;">

                                        <img src="assets/images/icons/pause.png" alt="Pause"

                                      </button>


                                      <button class="controlButton next" title="Next button">

                                        <img src="assets/images/icons/next.png" alt="Next"

                                      </button>


                                      <button class="controlButton shuffle" title="Shuffle button">

                                        <img src="assets/images/icons/shuffle.png" alt="Repeat"

                                      </button>



                                    </div>



                          <div class="playbackBar">

                            <span class="progressTime current">0.00</span>

                            <div class="progressBar">
                              <div class="progressBarBg">
                                <div class="progress"></div>

                              </div>
                            </div>

                            <span class="progressTime remaining">0.00</span>

                          </div>



                                </div>


                            </div>

                                <div id="nowPlayingRight">


                                  <div class="volumeBar">
                                    <button class="controlButton" title="Volume button">
                                      <img src="assets/images/icons/volume.png" alt="Volume">
                                    </button>

                                    <div class="progressBar">
                                      <div class="progressBarBg">
                                        <div class="progress"></div>

                                      </div>
                                    </div>
                                  </div>
                                </div>


                  </div>
            </div>

    </div>







  </body>
</html>
