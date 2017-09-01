<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;


$this->title = 'Repairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-repairs">
  <h1><?= Html::encode($this->title) ?></h1>
<?php $selected = 'repairs'?>
<br>
<div class = 'general-title'>
</div>
    <div class = 'general-content'>
<h4> We'll find you a solution at a price that suits you</h4> <br>
  At S and I Commercial, we use the latest computer diagnostic machines and dealer level Mercedes diagnositcs on anything from a car to a van to a truck
to diagnose your vehicle and get it back on the road as soon as possible.
<br>
<br>
We know that getting your car back on the road in excellent condition is what is important to you. We utilise the latest diagnostic tools to ensure
that when we hand you your keys, you'll be confident that you're driving away in a safe and well maintained vechicle.
<br>
<br>
If you want to prevent an issue with your vehicle worsening or are concerned that something might be going wrong with it, our mechanics can assess your
vehicle and quickly start work to find and fix the cause of any problems.

    </div>
</div>
