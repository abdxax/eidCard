<?php
session_start();
 // include composer autoload
require 'vendor/autoload.php';
require 'I18N/Arabic.php';
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;



if(isset($_POST['sub'])){
 if($_POST['card']==1){

// create an image manager instance with favored driver
     $manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
     $image = $manager->make('image/Eid1.png')->resize(500, 500);

// write text at position
//$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
     $arb=new I18N_Arabic('Glyphs');
     $tex=$arb->utf8Glyphs($_POST['name']);

     $image->text($tex, 250, 400, function($font) {
         $font->file(__DIR__.'/ae_Tholoth.ttf');
         $font->size(26);
         $font->color('#F8F8FF');
         $font->align('center');
         $font->valign('top');
         $font->angle(0);
     });

     $file=$image->save('image/card/1'.$_POST['name'].'.jpg');
      $filen='image/card/1'.$_POST['name'].'.jpg';
      $_SESSION['path']=$filen;
     header("location:download.php");


 }

 else if($_POST['card']==2)  {

     if (!preg_match('/[^A-Za-z0-9]+$/', $_POST['name'])) // '/[^a-z\d]/i' should also work.
     {

         // create an image manager instance with favored driver
         $manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
         $image = $manager->make('image/Eid2.png')->resize(500, 500);

// write text at position
//$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
         $arb = new I18N_Arabic('Glyphs');
         $tex = $arb->utf8Glyphs($_POST['name']);

         $image->text($tex, 250, 400, function ($font) {
             $font->file(__DIR__ . '/Amiri-Slanted.ttf');
             $font->size(26);
             $font->color('#3f3f3e');
             $font->align('right');
             $font->valign('top');
             $font->angle(0);
         });

         $file = $image->save('image/card/2' . $tex . '.jpg');

         $filen='image/card/2'.$_POST['name'].'.jpg';
         $_SESSION['path']=$filen;
         header("location:download.php");

     }

     else {
// create an image manager instance with favored driver
         $manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
         $image = $manager->make('image/Eid2.png')->resize(500, 500);

// write text at position
//$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
         $arb = new I18N_Arabic('Glyphs');
         $tex = $arb->utf8Glyphs($_POST['name']);

         $image->text($tex, 250, 400, function ($font) {
             $font->file(__DIR__ . '/a2.otf');
             $font->size(26);
             $font->color('#3f3f3e');
             $font->align('right');
             $font->valign('top');
             $font->angle(0);
         });

         $file = $image->save('image/card/2' . $tex . '.jpg');

         $filen='image/card/2'.$_POST['name'].'.jpg';
         $_SESSION['path']=$filen;
         header("location:download.php");
     }

 }

 else if($_POST['card']==3)  {

     if (!preg_match('/[^A-Za-z0-9]+$/', $_POST['name'])) // '/[^a-z\d]/i' should also work.
     {

         // create an image manager instance with favored driver
         $manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
         $image = $manager->make('image/Eid3.png')->resize(500, 500);

// write text at position
//$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
         $arb = new I18N_Arabic('Glyphs');
         $tex = $arb->utf8Glyphs($_POST['name']);

         $image->text($tex, 250, 400, function ($font) {
             $font->file(__DIR__ . '/Amiri-Slanted.ttf');
             $font->size(26);
             $font->color('#3f3f3e');
             $font->align('center');
             $font->valign('top');
             $font->angle(0);
         });

         $file = $image->save('image/card/3' . $tex . '.jpg');

         $filen='image/card/3'.$_POST['name'].'.jpg';
         $_SESSION['path']=$filen;
         header("location:download.php");

     }

     else {
// create an image manager instance with favored driver
         $manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
         $image = $manager->make('image/Eid3.png')->resize(500, 500);

// write text at position
//$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
         $arb = new I18N_Arabic('Glyphs');
         $tex = $arb->utf8Glyphs($_POST['name']);

         $image->text($tex, 250, 400, function ($font) {
             $font->file(__DIR__ . '/a2.otf');
             $font->size(26);
             $font->color('#3f3f3e');
             $font->align('center');
             $font->valign('top');
             $font->angle(0);
         });

         $file = $image->save('image/card/3' . $tex . '.jpg');

         $filen='image/card/3'.$_POST['name'].'.jpg';
         $_SESSION['path']=$filen;
         header("location:download.php");
     }

 }

 else if($_POST['card']==4)  {

     if (!preg_match('/[^A-Za-z0-9]+$/', $_POST['name'])) // '/[^a-z\d]/i' should also work.
     {

         // create an image manager instance with favored driver
         $manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
         $image = $manager->make('image/Eid4.png')->resize(500, 500);

// write text at position
//$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
         $arb = new I18N_Arabic('Glyphs');
         $tex = $arb->utf8Glyphs($_POST['name']);

         $image->text($tex, 250, 400, function ($font) {
             $font->file(__DIR__ . '/Amiri-Slanted.ttf');
             $font->size(26);
             $font->color('#F8F8FF');
             $font->align('center');
             $font->valign('top');
             $font->angle(0);
         });

         $file = $image->save('image/card/4' . $_POST['name'] . '.jpg');

         $filen='image/card/4'.$_POST['name'].'.jpg';
         $_SESSION['path']=$filen;
         header("location:download.php");

     }

     else {
// create an image manager instance with favored driver
         $manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
         $image = $manager->make('image/Eid4.png')->resize(500, 500);

// write text at position
//$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
         $arb = new I18N_Arabic('Glyphs');
         $tex = $arb->utf8Glyphs($_POST['name']);

         $image->text($tex, 250, 400, function ($font) {
             $font->file(__DIR__ . '/a2.otf');
             $font->size(26);
             $font->color('#F8F8FF');
             $font->align('center');
             $font->valign('top');
             $font->angle(0);
         });

         $file = $image->save('image/card/4' . $_POST['name'] . '.jpg');

         $filen='image/card/4'.$_POST['name'].'.jpg';
         $_SESSION['path']=$filen;
         header("location:download.php");
     }

 }


}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<style>

</style>
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-12 text-center">
                <img src="bailassanTrans-01.png" width="200px" height="200px">
            </div>
           

            <div class="col-6 offset-sm-2 text-center">
                <form method="POST">
                    <div class="form-group row">
                      <div class="col-sm-4">
                          <img src="image/Eid1.png" width="170px" height="220px"><br>
                          <input value="1" type="radio" name="card">
                      </div>
                        <div class="col-sm-4">
                            <img src="image/Eid2.png"  width="170px" height="220px"><br>
                            <input value="2" type="radio" name="card">
                        </div>

                        <div class="col-sm-4">
                            <img src="image/Eid3.png"  width="170px" height="220px"><br>
                            <input value="3" type="radio" name="card">
                        </div>

                        <div class="col-sm-4">
                            <img src="image/Eid4.png"  width="170px" height="220px"><br>
                            <input value="4" type="radio" name="card">
                        </div>

                    </div>
                  <div class="form-group ">
                      <div class="col-sm-7">
                          <input type="text" name="name" class="form-control" placeholder="ادخل اسمك هنا ">
                      </div>

                  </div>

                    <div class="form-group ">
                        <div class="col-sm-7 ">
                            <input type="submit" name="sub" class="btn btn-block btn-info"  value="تحميل ">
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
