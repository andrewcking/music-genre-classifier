<!-- Main Page -->
<?php include 'head.php';?>
<body>
  <div id="box">
      <h2 class="face">0.0</h2>
      <canvas id="top-waves" class="wave"></canvas>
      <canvas id="right-waves" class="wave"></canvas>
      <canvas id="bottom-waves" class="wave"></canvas>
      <canvas id="left-waves" class="wave"></canvas>
  </div>
  <div id="head">
      <a href="http://www.andrewking.io/">
          <p>←Back to AndrewKing.io</p>
      </a>
  </div>

<div id="upload">
    <p>Upload a song and I will tell you what genre I think it is based on the audio features. Please only upload Mp3s under 10MB. </p>
    <p>I currently understand the following genre classifications: classical, country, electronic/dance, indie/folk, jazz, metal, pop, r&b/hiphop, reggae, and hard rock</p>
    <form action="getfile.php" method="post" enctype="multipart/form-data"><br>
        <input id="file-upload" type="file" name="uploadFile">
        <input type="hidden" name="MAX_FILE_SIZE" value="25000" />
        <input type="submit" value="Submit">
    </form>
</div>
<?php include 'foot.php';?>
