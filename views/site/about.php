<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;


$this->title = 'Where To Find Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <h1><?= Html::encode($this->title) ?></h1>
<?php
  $coord = new LatLng(['lat' => 53.041880, 'lng' => -2.185166]);

  $map = new Map([
    'center' => $coord,
    'zoom' => 16,
  ]);

  $marker = new Marker([
    'position' => $coord,
    'title' => 'S And I Commercial',
  ]);

  $marker->attachInfoWindow(
    new InfoWindow([
        'content' => '<p>S And I Commercial</p>'
    ])
  );

  $map->addOverlay($marker);
  echo $map->display(); ?>
</div>
<br>
