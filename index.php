<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("glowa.php") ?>
  <title>Stronka Klubowa</title>
</head>

<body>
  <?php include_once("header.php"); ?>
  <article>
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div id="krasy" class="carousel-inner" style="margin-left:17.5% !important; margin-right:17.5% !important; margin-top:3% !important; width:65% !important;">
        <div class="carousel-item active">
          <img src="assets/zdj1.jpg" height="auto" width="auto" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Nasze Maszyny!</h2>
            <p>Super szybkie i niezawodne!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/zdj2.jpg" height="auto" width="auto" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Nasze Maszyny!</h2>
            <p>Najwyższa wydajnosć!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/zdj3.jpg" height="auto" width="auto" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Nasze Maszyny!</h2>
            <p>Innowacyjny i modernistyczny design!</p>
          </div>
        </div>
      </div>
      <i class="bi bi-arrow-left-circle-fill carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="font-size:48px"></i>
      <i class="bi bi-arrow-right-circle-fill carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="font-size:48px"></i>
    </div>
  </article>
  <main class="container" style="margin-top:5% !important;">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" style="height:75px !important; width:75% !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">Pobieranie</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Kopareczka</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Poniższy plik to koparka kryptowalut, klub nie ponosi żadnej odpowiedzialności za ewentualne szkody spowodowane działaniem programu
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                  <button type="button" class="btn btn-primary" onclick="ciec()"><span id="ladowansko" style="display:none;" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;
                    Pobierz
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <button type="button" class="btn btn-secondary" style="height:75px !important; width:75% !important;" onclick="krasy()">Jak używać</button>
        </div>
      </div>
    </div><br>
    <div class="card" style="background-color: #11191f !important; border-color:#11191f !important;">
      <div class="card-body" id="wynik" style="background-color: #11191f !important; border-color:#11191f !important; color:white !important; display: none">
        <div class="accordion bg-dark" id="accordionExample">
          <div class="accordion-item bg-dark text-light">
            <h2 class="accordion-header ">
              <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1. Wyłącz antywirusa
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                <strong>Nie martw się,</strong> to nie żaden wirus, to tylko koparka.
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark text-light">
            <h2 class="accordion-header">
              <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2. Pobierz koparkę z linka
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                Użyj przycisku <strong>"pobieranie"</strong> na stronie i spokojnie ją pobierz.
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark text-light">
            <h2 class="accordion-header">
              <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3. Wyraź wszystkie zgody
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                Potrzebujemy abyś wyraził zgodę na <strong>wszystkie</strong> zgody, aby nasz program działał poprawnie i efektywnie
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark text-light">
            <h2 class="accordion-header">
              <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                4. Uruchom jako administrator
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                Uruchomienie programu jako administrator powoduje <strong>dużo</strong> szybsze i efektywniejsze kopanie, a co za tym idzie więcej pieniędzy.
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark text-light">
            <h2 class="accordion-header">
              <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                5. Wybierz co chcesz kopać
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                Sam możesz zadecydować, którą kryptowalutę możesz kopać za pomocą naszego menu wyboru. Wystarczy, że wpiszesz numer wybranej przez ciebie kryptowaluty i boom, zaczyna się kopać. (Jest też opcja kopania po cichu - z ukrytym oknem).
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="container" style="margin-top:5% !important; margin-bottom:5% !important;">
    <small style="color:white !important;">©Woolnitz Company 2023 </small>
  </footer>
  <script>
    function krasy() {
      $("#wynik").css("display", "block");
    }

    function ciec() {
      $("#ladowansko").css("display", "");
      setTimeout(function() {
        location.assign('https://github.com/Klubowicze-Z-Anglii/kopalnia/releases/download/KOPARECZKA43006445261/darmowyram.exe');
        $("#ladowansko").css("display", "none");
        setTimeout(function() {
          $('#exampleModal').modal('hide');
        }, 2000);
      }, 5000);
    }
  </script>
</body>

</html>