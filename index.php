<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background:
    <?php
        include 'inc/functions.php';
        echo rand_color();
    ?>
">
  <div class="container">
    <div id="quote-box">
        <?php
            echo printQuote($quotes);
        ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
<script>
    setTimeout(function(){
        location.reload(true)
    }, 30000);
</script>
</html>