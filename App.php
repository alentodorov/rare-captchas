<?php


//docs 

require __DIR__ . '/vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;


// for ($i=1; $i <= 1000; $i++) { 
// 	$builder = new CaptchaBuilder(null, new PhraseBuilder(random_int(5, 12),"🥰captcha"));
// 	$builder->setMaxBehindLines(random_int(1,10));
// 	$builder->setMaxFrontLines(random_int(1,10));
// 	$builder->build($width = 400, $height = 200);
// 	$builder->save('nfts/rare-captcha-'. $i .'.jpg',  $quality = 100);
// }


$captcha_branding = new CaptchaBuilder("rare captchas");
$captcha_branding->setMaxBehindLines(random_int(1,10));
$captcha_branding->setMaxFrontLines(random_int(1,10));
$captcha_branding->build(400,800);
$captcha_branding->save('nfts/branding.jpg');


?>