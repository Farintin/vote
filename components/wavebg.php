<head>
    <link href="css/wavebg.css" rel="stylesheet" />
</head>
<div class="header">
<img src="https://i.imgur.com/XSGaWUp.png" width="280px">
<!--Content before waves-->
<div class="inner-header flex">
    
<h1>Vote for your Favourite <br> Contestant</h1>
</div>
<?php require_once'search.php'; ?>
<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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

<!--Content starts-->
<div class="content flex">
    <p>&copy; <script>document.write(new Date().getFullYear());</script>
    All Rights Reserved  by <a href="https://webify.com.ng" style="text-decoration: none;" target="_blank">Webify&trade;</a>
    </p>
</div>
<!--Content ends-->