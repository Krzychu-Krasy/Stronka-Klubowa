<header>
  <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Stronka Klubowa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://malpiamuza.eu">Małpia Muza</a>
          </li>
          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
            <hr class="d-lg-none my-2 text-white-50">
          </li>
        </ul>
        <ul class="navbar-nav me-right mb-2 mb-lg-0">
          <li class="nav-item col-6 col-lg-auto">
          <a href="https://steamcommunity.klubowicze.eu">
          <button type="button" class="btn btn-dark" id="ST">
            <i class="bi bi-steam" style="font-size:28px"></i>
            </button></a>
            <a href="https://www.facebook.com/people/W%C5%82adys%C5%82aw-Arciszewski/pfbid02oLZaqrskrZc1CEgFErUdjhywK8Gus6kzxdWzMtLhWeR9xNadFPMEsvvQymdANqWtl/?locale=pl_PL" target="_blank">
              <button type="button" class="btn btn-dark" id="FB">
                <i class="bi bi-facebook" style="font-size:28px"></i>
              </button></a>
            <a href="https://www.youtube.com/channel/UCcwO7ljiWiOeXxgWuo6Ee_w?app=desktop" target="_blank">
              <button type="button" class="btn btn-dark" id="YT">
                <i class="bi bi-youtube" style="font-size:28px"></i>
              </button></a>
          </li>
          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
            <hr class="d-lg-none my-2 text-white-50">
          </li>
        </ul>
        <ul class="navbar-nav me-right mb-2 mb-lg-0">
          <?php
          if (isset($_SESSION['user'])) {
          ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['user'] ?></a>
              <ul class="dropdown-menu dropdown-menu-dark bg-dark">
                <li><a class="dropdown-item" href="/logout.php">Wyloguj</a></li>
              </ul>
            </li>
          <?php
          } else {
            echo '<li class="nav-item"><a class="nav-link" aria-current="page" href="logowanie.php">Zaloguj</a></li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>