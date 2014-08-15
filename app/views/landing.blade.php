<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href='/assets/images/favicon.ico?'>
<title>Crater Lake Water</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="Crater Lake Water">
<meta property="og:description" content="Crater Lake Water.  The purest of the pure.">
<meta property="og:type" content="website">
<meta name="description" content="Crater Lake Water.  The purest of the pure.">
<!-- Styles -->
{{ HTML::style('/assets/css/bootstrap.min.css') }}
{{ HTML::style('/assets/css/bootstrap-theme.min.css') }}
{{ HTML::style('/assets/css/custom.css') }}
{{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}

</head>

<body>
<div class="headerContainer clearfix">
	
  <div class="navbar navbar-default navbar-fixed-top navbar-transparent">
    <div class="navbar-inner">
      
      <div class="logoCon clearfix">
        <article class="leftLogo logo-text"><a href="#" title="logo" class="logo">Crater Lake</a></article>
        <article class="navigation">
          <ul class="choices">
            <li><a href="#" title="about"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a href="#" title="about"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="#about" title="about"><i class="fa fa-group fa-lg"></i></a></li>
          </ul>
        </article>
      </div>
      
    </div>
  </div>

  <div id="object" class="animate fadeIn">
    <div class="container clearfix">
      <div class="SignInFacebook clearfix">
        <h2>CRATER<font> LAKE</font> WATER</h2>
        <h3>The cleanest water from the purest source.</h3>
        <h4>Sign up to receive news about our offers and events:</h4>
        <article class="btnGreen"><a href="#"><span><i class="fa fa-envelope sign-in-fb-icon"></i></span><font>SIGN UP WITH EMAIL</font></a></article>
      </div>
    </div>
  </div>
</div>

<div class="section2 clearfix">
  <div class="container">
    <div class="innerWidth">
      <article class="headingTitle">
        <h2>Free of all adulterants and additives.</h2>
        <p>Our mission is to bring you the cleanest and purest water on the market.</p>
        <a href="#">
       
        </a> </article>
         
    </div>
    <div id="object2" class="image-center"><img src="../assets/images/bottled-water.jpg" alt="image" title="image"></div>
  </div>
</div>

<div id="about" class="section4 clearfix">
  <div class="innerWidth">
    <div class="headingTitle">
      <h2>About the team.</h2>
      <p>Dedicated, experienced, hyper-focused professionals.  </p>
    </div>
  </div>

  <div class="outerWidth">

      <div class="container-fluid">
        <div class="row">
           <div class="col-md-4">
              <div class="profile-image">
                <img src="../assets/images/Greg-Sutyak.png" class="img-circle" alt="image" title="image" width="150px" height="150px">
              </div>
              <div class="profile-name">
              Greg Sutyak
              </div>
              <div class="profile-title">
              Chief Financial Officer
              </div>
              <div class="profile-description">
              Greg Sutyak has had an 18 year career combining hands-on operational expertise with innovative product/venture development, deal making and financial acumen to create shareholder value and deliver multimillion–dollar revenue for high growth organizations.    
              </div>
           </div>

           <div class="col-md-4">
              <div class="profile-image">
                <img src="../assets/images/no-user-profile-pic.jpg" class="img-circle" alt="image" title="image" width="150px" height="150px">
              </div>
              <div class="profile-name">
              John Doe
              </div>
              <div class="profile-title">
              Chief Executive Officer/Founder
              </div>
              <div class="profile-description">
              Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Nullam id dolor id nibh ultricies vehicula. Cum sociis natoque penatibus.
              </div>
           </div>

           <div class="col-md-4">
              <div class="profile-image">
                <img src="../assets/images/no-user-profile-pic.jpg" class="img-circle" alt="image" title="image" width="150px" height="150px">
              </div>
              <div class="profile-name">
              John Doe
              </div>
              <div class="profile-title">
              Chief Operations Officer
              </div>
              <div class="profile-description">
              Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Nullam id dolor id nibh ultricies vehicula. Cum sociis natoque penatibus.
              </div>
           </div>
    
        </div>
      </div>

    </div>
</div>

{{ HTML::script('/assets/js/jquery-2.1.1.min.js') }}
{{ HTML::script('/assets/js/bootstrap.min.js') }}

<script type="text/javascript">

        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() >100) {
                    $('.navbar').addClass('f-nav');
                    $('.navbar').removeClass('navbar-transparent');

                    $('.logo-text').addClass('logo-text-scrolled');
                    $('.logo-text').removeClass('logo-text');

                    $('.fa-facebook').addClass('social-scrolled');     
                    $('.fa-twitter').addClass('social-scrolled');
                    $('.fa-group').addClass('social-scrolled');

                    $('.SignInFacebook h2').css('color',"#3498db");

                } else {

                    $('.navbar').removeClass("f-nav");
                    $('.navbar').addClass('navbar-transparent');

                    $('.logo-text-scrolled').addClass('logo-text');
                    $('.logo-text-scrolled').removeClass('logo-text-scrolled'); 

                    $('.fa-facebook').removeClass('social-scrolled');     
                    $('.fa-twitter').removeClass('social-scrolled');
                    $('.fa-group').removeClass('social-scrolled');

                    $('.SignInFacebook h2').removeAttr('style');
                }
            });

        });


</script>

</body>
</html>