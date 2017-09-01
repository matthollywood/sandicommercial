<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'S And I Commercial Vehicle Repairs';
?>
<div class="site-index">

    <div class="body-content">
    <style>
      #map {
        height: 100%;
      }
    </style>
    <div class="col-md-4">
        <!--Card-->
        <div class="card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="images/carenginecloseup.jpg" class="img-fluid" alt="">
                <a href="#">
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <h4 class="card-title">Repairs</h4>
                <!--Text-->
                <p class="card-text">We repair all issues on commercial and non-commercial vehicles</p>
                <?= Html::a('See more', ['site/commercial'], ['class' => 'btn btn-primary'])?></a>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->
    </div>
    <div class="col-md-4">
        <!--Card-->
        <div class="card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="images/whitevan.jpg" class="img-fluid" alt="">
                <a href="#">
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <h4 class="card-title">Services</h4>
                <!--Text-->
                <p class="card-text">We service both commercial and non-commercial vehicles</p>
                <?= Html::a('See more', ['site/services'], ['class' => 'btn btn-primary'])?></a>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->
    </div>
    <div class="col-md-4">
        <!--Card-->
        <div class="card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="images/brokencar.jpg" class="img-fluid" alt="">
                <a href="#">
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <h4 class="card-title">Recovery</h4>
                <!--Text-->
                <p class="card-text">24 Hour recovery available in the area, call now</p>
                <?= Html::a('See more', ['site/recovery'], ['class' => 'btn btn-primary'])?></a>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->
    </div>
    <!--
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>


            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>


            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>


            </div>

          </div>
          -->
    </div>
</div>
