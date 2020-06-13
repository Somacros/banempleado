<?php

    function createCarousel(){
        echo "<div id='carouselExampleCaptions' class='carousel slide' data-ride='carousel'>
        <ol class='carousel-indicators'>
          <li data-target='#carouselExampleCaptions' data-slide-to='0' class='active'></li>
          <li data-target='#carouselExampleCaptions' data-slide-to='1'></li>
          <li data-target='#carouselExampleCaptions' data-slide-to='2'></li>
        </ol>
        <div class='carousel-inner'>
          <div class='carousel-item active'>
            <img src='./media/banner/banner1.jpeg' class='d-block w-100' alt='...'>
            <div class='carousel-caption d-none d-md-block'>
              <h2>Siéntete seguro</h2>
              <p>Obtén esa tranquilidad de saber que tu economía está segura en nuestras manos</p>
            </div>
          </div>
          <div class='carousel-item'>
            <img src='./media/banner/banner2.jpg' class='d-block w-100' alt='...'>
            <div class='carousel-caption d-none d-md-block'>
              <h2>Disfruta de la vida</h2>
              <p>Libérate de tus preocupaciones y empieza a disfrutar todos esos momentos que te hacen falta.</p>
            </div>
          </div>
          <div class='carousel-item'>
            <img src='./media/banner/banner3.png' class='d-block w-100' alt='...'>
            <div class='carousel-caption d-none d-md-block'>
              <h2>Invierte tu dinero</h2>
              <p>Utiliza el dinero extra que obtengas en una gran inversión. ¡Analiza, selecciona e invierte en tu futuro!</p>
            </div>
          </div>
        </div>
        <a class='carousel-control-prev' href='#carouselExampleCaptions' role='button' data-slide='prev'>
          <span class='carousel-control-prev-icon' aria-hidden='true'></span>
          <span class='sr-only'>Previous</span>
        </a>
        <a class='carousel-control-next' href='#carouselExampleCaptions' role='button' data-slide='next'>
          <span class='carousel-control-next-icon' aria-hidden='true'></span>
          <span class='sr-only'>Next</span>
        </a>
      </div>";
    }

?>