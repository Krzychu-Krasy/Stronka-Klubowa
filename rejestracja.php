<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("glowa.php") ?>
  <title>Rejestracja - Stronka Klubowa</title>
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

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Rejestracja</p>

                  <form class="mx-1 mx-md-4" method="post">
                    <?php
                    function rejestracja($login, $email, $haslo, $haslo2, $timestamp)
                    {
                      if ($login == "" || $haslo == "") {
                        echo '<p class="text-danger">Wypełnij wszystkie pola</p>';
                        return;
                      }

                      if ($haslo != $haslo2) {
                        echo '<p class="text-danger">Podane przez ciebie hasła są różne</p>';
                        return;
                      }

                      $password_hash = password_hash($haslo, PASSWORD_DEFAULT);

                      $db = mysqli_connect("localhost", "klubowic_klub", "klub", "klubowic_klub") or die("Error: " . mysqli_connect_error());
                      $stmt = $db->prepare("INSERT INTO users (login, email, haslo, created_at) VALUES (?, ?, ?, ?)") or die(mysqli_error($db));

                      $stmt->bind_param("sssi", $login, $email, $password_hash, $timestamp) or die(mysqli_error($db));
                      if (!$stmt->execute()) {
                        if (str_contains(mysqli_error($db), "Duplicate entry")) {
                          echo '<p class="text-danger text-center">Podany przez ciebie mail lub login, jest już zajęty</p>';
                        } else {
                          echo '<p class="text-danger">Błąd: ' . mysqli_error($db) . '</p>';
                        }
                        return;
                      }

                      echo '<h1>Zalogowano!</h1><meta http-equiv="refresh" content="0; url=/logowanie.php">';
                      $stmt->close();
                    }

                    if (isset($_POST["rejestracja"])) {
                      rejestracja($_POST["login"], $_POST["email"], $_POST["haslo"], $_POST["haslo2"], time());
                    }
                    ?>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Login</label>
                        <input type="text" id="form3Example1c" class="form-control" style="background-color:#11191f;color:white !important;" name="login" required>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Adres E-Mail</label>
                        <input type="email" id="form3Example3c" class="form-control" style="background-color:#11191f;color:white !important;" name="email" required>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Hasło</label>
                        <input type="password" id="form3Example4c" class="form-control" style="background-color:#11191f;color:white !important;" name="haslo" required />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">Powtórz Hasło</label>
                        <input type="password" id="form3Example4cd" class="form-control" style="background-color:#11191f; color:white !important;" name="haslo2" required />
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <label class="form-check-label">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required />
                        Zgadzam się na wszystko
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" class="btn btn-dark btn-lg" name="rejestracja" value="Zarejestruj">
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