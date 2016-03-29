<!DOCTYPE html>
<html lang="en">
<head>
<?php

function twoRandoms ($len)
{
   $random1 = mt_rand(0,$len-1);
   $random1 = mt_rand(0,$len-1);
   $random1 = mt_rand(0,$len-1);
   $random2 = mt_rand(0,$len-1);

   if($random2 == $random1)
   {
      $random2 = $random2+1;
      if($random2 >= $len)
      {
         $random2 = 0;
      }
   }

   return array($random1,$random2);
}

$zitate = simplexml_load_file('xml/zitate.xml');
$zitateLen = count($zitate);

list ($index1, $index2) = twoRandoms($zitateLen);
?>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>&quot;Offline is the new luxury&quot;</title>
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  ––––––––––––––––––––––––––––––––––––––––––––––––––
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
-->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  ––––––––––––––––––––––––––––––––––––––––––––––––––
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <h4>Basic Page</h4>
        <p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up the <a href="http://www.getskeleton.com">Skeleton documentation</a>.</p>
      </div>
    </div>
  </div>
-->


<!--HEADER-->
<header>
  <div class="container">
    <section class="einleitung">
      <div class="row bottom">
	<div class="two-thirds column">
          <p class="left">Einen wunderschönen Tag für Sie,</p>
	  <p class="justify">und herzlich willkommen auf dieser unserer Internetpräsenz.
	    Wir freuen uns immer sehr über Besucher dieser Seite, wenn wir denn mitbekommen, dass es sie gibt!<br>
	    Vermutlich haben sie eine eMail von mir oder jemandem aus unserer Familie erhalten und sind deshalb
	    aufmerksam und neugierig geworden. Vielleicht sind Sie ja auch mit uns bzw. mit
	    einzelnen Mitgliedern unserer Familie persönlich bekannt? Wie es sich auch immer verhalten mag, ich
	    hoffe Sie befinden sich wohl und tun in diesem Moment das, was Sie möchten, bzw. genießen die Freiheit
	    nicht das tun zu müssen was Sie nicht wollen! Des Weiteren möchte ich Sie ermutigen ihre Gedanken schweifen
	    zu lassen, vielleicht auch Offline?! Mögen Sie sich dazu von den handverlesenen Zitaten und Aphorismen
	    auf dieser Seite inspirieren lassen...
	  </p>
	  <p class="right"><b>Bastian-Ruppert.de</b></p>
	</div>
      </div><!-- end row -->
  <!--    <div class="row">
	<p></p>
      </div> end row -->
      <div class="row bottom">
	<div class="offset-by-four two-thirds column">
          <p class="left">&quot;Nehmen Sie ein digitales Timeout!&quot;</p>
	  <p class="justify">
	    [...] &quot;Und wenn man ganz alleine mit sich ist, ganz alleine in der Natur, dann ist man mit sich
	    konfrontiert, und das ist gut. Dann haben Sie ihre eigenen Gedanken, Ihre eigenen Gefühle,
	    dann sage ich: Offline is the new luxury.&quot;
	  </p>
	  <p class="right author"><a href="https://www.youtube.com/watch?v=NxdzxGUDFd0">Dr. Daniele Ganser: Medienkompetenz...</a></p>
	</div>
      </div><!-- end row -->
    </section>
  <!--  
    <section class="services">
      <div class="row">
        <div class="twelve columns">
          <h3>My areas of expertise</h3>
        </div>
      </div>
      <div class="row">
        <div class="one-half column">
          <a href="#">
            <h4>Graphic Design</h4>
            <span class="fa fa-picture-o"></span>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
          </a>
        </div>
        <div class="one-half column">
          <a href="#">
            <h4>Web Design</h4>
            <span class="fa fa-leaf"></span>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
          </a>
        </div>
      </div> - //-end of .row
    </section>
-->
  </div><!--end of .container-->
</header>

<!--ABOUT-->
<section class="about">
  <div class="container">
    <div class="row bottom">
      <div class="two-thirds column">
	<p class="justify">
	  <?php echo $zitate->zitat[$index1]->text; ?>
	</p>
	<p class="right"><?php echo $zitate->zitat[$index1]->autor; ?></p>
      </div>
    </div><!-- end row -->
    <div class="row">
      <p><br></p>
    </div> <!-- end row -->
    <div class="row bottom">
      <div class="offset-by-four two-thirds column">
	<p class="justify">
	  <?php echo $zitate->zitat[$index2]->text; ?>
	</p>
	<p class="right author"><?php echo $zitate->zitat[$index2]->autor; ?></p>
      </div>
    </div><!-- end row -->
  </div><!--end of .container-->
</section>

<!--CONTACT-->
<section class="contact">
  <div class="container">
<!--
    <div class="row">
      <div class="twelve columns">
	<p></p>
      </div>
    </div>
    <div class="row">
      <p></p>
      <div class="twelve columns">
        <a href="#" class="btn block btn-blue">Mail me</a>
      </div>
    </div>
-->
    <div class="row">
      <div class="twelve columns">
	<p class="creator"> <a href="impressum.html">Impressum</a>   <a href="disclaimer.html">Disclaimer</a> </p>
      </div>
    </div><!--end of .row-->
  </div><!--end of .container-->
</section>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
