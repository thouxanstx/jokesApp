<?php
	include_once 'includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body style="background: url(background.jpg) no-repeat;">
  <header class="site-header">
    <nav class="navbar navbar-expand-md navbar-dark bg-steel fixed-top">
      <div class="container">
        <a class="navbar-brand mr-4" href="index.php">JOX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggle">
          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link" href="index.php">Home</a>
            <a class="nav-item nav-link" href="jokes.php">Jokes</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
	  <main role="main" class="container">
      	<table class="table">
      		<tr>
      			<th>Id</th>
      			<th>Joke</th>
      			<th>Rating</th>
		<?php
			
			$sql = "SELECT * FROM jokes;";
			$result = mysqli_query($conn, $sql);
			$checkResult = mysqli_num_rows($result);

			if($checkResult > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>". $row["id"] ."</td><td>". $row["joke"] ."</td><td>". $row["rating"]. "</td><tr>";
				}
				echo "</table>";
			}
			else {
				echo "No results";
			}
			$conn -> close();
		?>
	  </main>
  

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


