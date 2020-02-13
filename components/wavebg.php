<div class="header pt-5">
    <img src="https://i.imgur.com/XSGaWUp.png" width="280px">
    <!--Content before waves-->
    <div class="inner-header flex mt-2">
        <div class="h3 text-white font-weight-light">Vote for your Favourite <br> Contestant</div>
    </div>
    <?php require ('search.php'); ?>
    <div class="container-xl">
        <div class="row">
                <?php

                for ($x = 0; $x <= 4; $x++) {
                    include ('card.php');
                }
                ?>
        </div>
    </div>

    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
<!--Waves end-->
</div>
<!--Header ends-->