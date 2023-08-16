<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AJAX</title>
  <!-- Include the Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">
  <!-- Include the Font Awesome JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/js/all.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- External css -->
  <link rel="stylesheet" href="css/ajax_style.css">
</head>
<body>
  <form action="" method="get" onsubmit="return fetchUsingAjax()">
    <div id="search-container" style="margin-top: 5%;">
      <div id="search-input-container">
        <input type="text" name="search" id="search_id" placeholder="Search users" />
      </div>
      <button id="image-button" type="submit">
        <i class="fas fa-search"></i>
      </button>
      <br />
      
    </div>
    <div id="search_result" class="fade-in">
    </div>
  </form>

  <script>
    function fetchUsingAjax() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
          document.getElementById("search_result").innerHTML =
            this.responseText || "No data";
        }
      };
      var str = document.getElementById("search_id").value;
      xmlhttp.open("GET", "server.php?search=" + str, true);
      xmlhttp.send();
      return false;
    }
  </script>
</body>
</html>
