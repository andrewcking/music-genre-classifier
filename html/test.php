<!-- Displaying Prediction Results Page-->
<?php include 'head.php';?>
<body>
  <div id="box">
      <h2 id="example-title"></h2>
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
    <progress value="0" max="80" id="progressBar"></progress>
    <p id="status">Decompressing file...</p>
    <div id="showbutton">
        <a href="/"><button class="button">Classify Another...</button></a>
    </div>
</div>
<script>
</script>

<?php include 'foot.php';?>
