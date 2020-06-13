<?php

function createBasicCard($imageLocalRoute,$PrimaryText,$NombreOcupacion) {
    echo "
    <div class='card' style='width: 18rem;'>
        <img src='$imageLocalRoute' class='card-img-top' alt='...'>
        <div class='card-body'>
            <p class='card-text'>$PrimaryText</p>
            <h5>$NombreOcupacion</h5>
        </div>
    </div>";
}


?>