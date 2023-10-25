<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("glowa.php") ?>
  <title>Logowanie - Stronka Klubowa</title>
</head>

<body>
  <?php include_once("header.php"); ?>
  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px; -webkit-box-shadow: 8px 8px 24px 0px rgba(255, 253, 253, 1);
-moz-box-shadow: 8px 8px 24px 0px rgba(255, 253, 253, 1);
box-shadow: 8px 8px 24px 0px rgba(255, 253, 253, 1);background-color:#11181f; color:white !important;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Logowanie</p>

                  <form class="mx-1 mx-md-4" method="post">
                    <?php
                    $db = mysqli_connect("localhost", "klubowic_klub", "klub", "klubowic_klub") or die("Error: " . mysqli_connect_error());

                    if (isset($_POST["logowanie"])) {
                      $email = $_POST["email"];
                      $haslo = $_POST["haslo"];
                      $timestamp = time();

                      $stmt = $db->prepare("SELECT login, haslo FROM users WHERE email=?");
                      $stmt->bind_param("s", $email);
                      $stmt->execute();
                      $stmt->store_result();

                      if ($stmt->num_rows > 0) {
                        $stmt->bind_result($user, $haslo_z_bazki);
                        $stmt->fetch();
                        if (password_verify($haslo, $haslo_z_bazki)) {
                          $_SESSION["user"] = $user;
                          echo '<meta http-equiv="refresh" content="0; url=/">';
                        } else {
                          echo "<p class='text-danger'>Niepoprawny login lub hasło</p>";
                        }
                      } else {
                        echo "<p class='text-danger'>Niepoprawny login lub hasło</p>";
                      }

                      $stmt->close();
                    }
                    ?>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Adres E-Mail</label>
                        <input type="email" name="email" id="form3Example3c" class="form-control" style="background-color:#11191f;color:white !important;" />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Hasło</label>
                        <input type="password" id="form3Example4c" class="form-control" style="background-color:#11191f;color:white !important;" name="haslo">
                        <a href="https://pornhub.com">Zapomniałem hasła</a>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" class="btn btn-dark btn-lg" name="logowanie" value="Zaloguj">
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      Nie masz konta? Zarejestruj się &nbsp;<a href="rejestracja.php">tutaj</a>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="container" style="margin-top:5% !important;  margin-bottom:5% !important;">
    <small style="color:white !important;">©Woolnitz Company 2023 </small>
  </footer>
</body>

</html>