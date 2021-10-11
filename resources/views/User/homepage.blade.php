<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Darkness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <div id="logo">
      <h1>
        <a href="index.html"><img src="images/demo/logo.gif" alt="" width=150px; style="border-radius: 50%; "/></a></h1>
    </div>
    <div  id="topnav" style="margin-top:50px;">
      <ul>
        <li class="active"><a href="{{ route('show.home') }}">Home</a></li>
        <li><a href="{{ route('show.ttl') }}">Through The Lens</a></li>
        <li><a href="pages/full-width.html">From The Best</a></li>
      </ul>
<br><br>
      <ul>
        <li><a href="#">Author's Viewfinder</a></li>
        <li><a href="#">Let's Commemorate!</a></li>
        <li class="last"><a href="#">Put Into Words</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="latest">

   <div class="container" style="border: 1px solid #DDDDDD; position: relative;">
	<div class="tag" style="float: right; position: absolute; left: 0px; top: 0px;  padding: 5px; color: #FFFFFF;
       font-weight: bold; margin-top: 25%;"> This is the featured message in this section which is an information </div>
    <div class="fl_left"><a href="#">
      @foreach($data as $row)
      <img src="store_image/fetch_image/{{ $row->id }}" alt="" style="width:  575px; height:  300px; object-fit: cover;" /></a></div> <!-- //Variable -->
      @endforeach

	</div>
    <div class="fl_right">
      <h2>Cursus penati saccum ut.</h2>
      <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Cursuspenatisaccum ut curabitur nulla tellus tor.</p>
      <ul>
        <li><a href="#"><img src="images/demo/100x100.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/100x100.gif" alt="" /></a></li>
        <li class="last"><a href="#"><img src="images/demo/100x100.gif" alt="" /></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="intro">
    <ul>
      <li>
        <h2>Indonectetus facilis leo nibh</h2>
        <div class="imgholder"><a href="#"><img src="images/demo/300x150.gif" alt="" /></a></div>
        <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. </p>
        <p>Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagittislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>
        
      </li>
      <li>
        <h2>Indonectetus facilis leo nibh</h2>
        <div class="imgholder"><a href="#"><img src="images/demo/300x150.gif" alt="" /></a></div>
        <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. </p>
        <p>Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagittislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>
        
      </li>
      <li class="last">
        <h2>Indonectetus facilis leo nibh</h2>
        <div class="imgholder"><a href="#"><img src="images/demo/300x150.gif" alt="" /></a></div>
        <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. </p>
        <p>Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagittislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>
        
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="container">
    <div id="content">
      <h2>About This Free CSS Template</h2>
      <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
      <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
      <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
    </div>
    <div id="column">
      <div class="holder">
        <h2>Nullamlacus loborttis</h2>
        <ul id="latestnews">
          <li class="last"><img class="imgl" src="images/demo/80x80.gif" alt="" />
            <p><strong>Indonectetus facilis leo nibh.</strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna.</p>
          </li>
        </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>