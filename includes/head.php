<?php
include_once("token.php");
include_once("ppc_or_seo.php");
if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}
?>

<link rel="canonical" href="<?=$requesMet.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
<link rel="alternate" href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'] ?>"
    hreflang="en-US" />

<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="description"
    content="Resumein 99 professional writers have years of experience in resume writing. Our resume writers have helped thousands of applicants in getting their dream job.">
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="4Jg4F1UwxOdRv-aCYfimyRueAr2UX6aAklwsYHK4ALY" />
<link rel="stylesheet" href="../assets/css/layout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/build-prices.ae99c1128e4766f09474.css">

<script src="../assets/js/1.4.4-jquery.min.js"></script>
<script src="../assets/js/1.8.11-jquery-ui.min.js"></script>
<script src="../assets/js/jquery-ui-ui.selectmenu.min.js"></script>
<script src="../assets/js/subscribe-popup.js"></script>
<script src="../assets/js/subscribe-sweet-alert.min.js"></script>
<link rel="stylesheet" href="../assets/css/subscribe-popup-resumesplanet.com.css">
<link rel="stylesheet" href="../assets/css/subscribe-sweet-alert.css">


<link rel="shortcut icon" type="image/x-icon" href="favicon.png">

<meta name="page_url" content="www.resumein99s.com/">
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}
</style>

<meta name="google-site-verification" content="mCV8EUPohVmbdoCTCwftQoMoMm47wJrI1KGWeO8-vXQ" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-247982883-25"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-247982883-25');
</script>
