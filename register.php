<?php
    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="decouvrir.html" class="logo">TechnoShop.</a>
        <nav>
            <a href="Decouvrir.php">Découvrir</a>
            <a href="connexion.php">Connexion</a>
            <a href="register.php" class="active">Enregistrer</a>
        </nav>
    </header>
    <main>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "1234";
            $dbname = "boutique_online";
            // echo '<p class="successful">Registration successful!</p>';

            // Create a connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // If the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                // SQL query to insert data into the table
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
                    echo '<p class="successful">Registration successful!</p>';
                if ($conn->query($sql) === TRUE) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            // Close the connection
            $conn->close();
            ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="title">Bienvenue</div>
            <div class="subtitle">Créez votre compte !</div>

            <div class="input-container ic1">
                <input name="username" id="username" class="input" type="text" placeholder=" " />
                <div class="cut cut-long"></div>
                <label for="username" class="placeholder">Nom d'utilisateur</label>
            </div>

            <div class="input-container ic2">
                <input name="email" id="email" class="input" type="email" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</label>
            </div>

            <div class="input-container ic2">
                <input name="password" id="password" class="input" type="password" placeholder=" " />
                <div class="cut"></div>
                <label for="password" class="placeholder">Mot de passe</>
            </div>

            <button type="submit" class="submit">Registre</button>
<!--             
            <label>Name:</label>
            <input type="text" name="username" required><br><br>
        
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            
            <input type="submit" value="Register"> -->
        </form>
        
    </main>
</body>
</html>