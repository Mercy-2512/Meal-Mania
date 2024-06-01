<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    var offset = 10;
    
    function loadMore() {
        
      $.ajax({
        url: "sambar.php",
        type: "POST",
        data: { offset: offset },
        success: function(data) {
          $("#mydiv").append(data);
          offset += 10;
          
        }
      });
    }
  </script>
</head>
<body>
  <div id="mydiv">
    <?php
    $conn = new mysqli('localhost', 'root', 'root','meal');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "";
    ?>
  </div>
  <button onclick="loadMore()">See More</button>
</body>
</html>
