<?php

/** @var yii\web\View $this */

$this->title = 'Disquera';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Laboratorio: Proyecto Yii2</h1>

        <p class="lead">Este proyecto se basa en una disquera.</p>
    </div>

    <div class="body-content">
        <div class="card-group">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Sellos</h5>
                        <a class="btn btn-primary" href="./index.php?r=sello-discografico/index">Ver Sellos</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Artistas</h5>
                        <a class="btn btn-secondary" href="./index.php?r=artista/index">Ver Artistas</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Bandas</h5>
                        <a class="btn btn-success" href="./index.php?r=banda/index">Ver Bandas</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Albums</h5>
                        <a class="btn btn-danger" href="./index.php?r=album/index">Ver Albums</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;"> 
                    <div class="card-body">
                        <h5 class="card-title">Canciones</h5>
                        <a class="btn btn-warning" href="./index.php?r=cancion/index" >Ver Canciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
