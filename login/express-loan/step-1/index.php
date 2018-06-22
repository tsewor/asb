<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="iem7 old"><![endif]-->
<!--[if lt IE 7 ]><html lang="en" class="ie6 old"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="ie7 old"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from airdriesavingsbank.com/express-loan/step-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2016 12:05:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    

<title>Step 1 : Airdrie Savings Bank</title>

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
    <link rel="stylesheet" href="../../Content/css/all.css">
    <!--<![endif]-->
    <link rel="shortcut icon" href="../../Content/images/icons/favicon.ico" />
    <link rel="apple-touch-icon" href="../../Content/images/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" href="../../Content/images/icons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="../../Content/images/icons/apple-touch-icon.png">
    <link rel="stylesheet" href="../../Content/webfonts/css/fontello.css">
    <link rel="stylesheet" href="../../Content/webfonts/css/animation.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="/Content/webfonts/css/fontello-ie7.css">
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script src="../../Content/js/modernizr.js"></script>
</head>
<body>

    <header id="top" class="masthead push-half--bottom masthead--alt" role="banner">
        <div class="wrapper">
            <div class="block relative clearfix">
                <!--[if gt IE 8]><!-->
                    <a class="site-logo" href="../../index.php"><img src="../../Content/images/branding/asb-logo.svg" alt="Airdrie Savings Bank"></a>
                <!--<![endif]-->
                <!--[if lte IE 8 ]>
                    <a class="site-logo" href="/"><img src="/Content/images/branding/ie-logo.png" alt="Airdrie Savings Bank"></a>            
                <!--<![endif]-->
                <h2 class="tagline">Britain's only Independent Savings Bank <span><i>Est. 1835</i></span></h2>
            </div>
        </div>
    </header>
    


<div class="wrapper">
    <div class="content editor-content margin-btm-xlarge" role="main">
        <header class="medium-12 push-half--bottom">
            <h1 class="tera pull-left-desktop">Express Loan application</h1>
            <a href="../../personal/loans/index.php" class="gamma pull-right-desktop cancel-link">Cancel this application</a>
        </header>
        <div class="medium-12">
            <ul class="steps clearfix">
                <li class="first-steps past">Preparation <i class="tri-one"></i><i class="tri-two"></i></li>
                <li class="active"><span>Step 1 of 4 -</span> Confirm loan <i class="tri-one"></i><i class="tri-two"></i></li>
                <li><span>Step 2 of 4 -</span> Personal details <i class="tri-one"></i><i class="tri-two"></i></li>
                <li><span>Step 3 of 4 -</span> Employment <i class="tri-one"></i><i class="tri-two"></i></li>
                <li><span>Step 4 of 4 -</span> Income &amp; Expenditure <i class="tri-one"></i><i class="tri-two"></i></li>
                <li>Review</li>
            </ul>
        </div>
        <div class="clearfix margin-btm-large">
            <div class="reverse">
                <div class="medium-3">
                    <div class="panel bg-light-blue">
                        <h2 class="alpha"></h2>
                        <p class="gamma"></p>
                    </div>
                </div>
                <div class="medium-9 relative">
                    <h2 class="mega">Confirm Loan</h2>
                    



<form action="https://airdriesavingsbank.com/express-loan/step-1/" class="form" enctype="multipart/form-data" method="post">    <div ng-app="loanApp" ng-controller="expressLoanController" class="cf">
        <div class="panel bg-off-white round panel-borders relative">
            <div class="large-8">
                <div class="calc-controls">
                    <span class="margin-btm-small calc-control__title">I would like to borrow &pound; <input class="slider-input" id="LoanAmount" name="LoanAmount" ng-model="loan.amount" type="text" value="" /></span>
                    <div class="calc-controls__slider">
                        <div class="calc-controls__slider-icon small-2 medium-1 center"><button class="btn-naked" ng-click="decrementAmount()"><i class="icon-minus-squared beta"></i></button></div>
                        <div ui-slider="limits.amount" ng-model="loan.amount" class="small-8 medium-10 global-slider" id="slider-amount"></div>
                        <div class="calc-controls__slider-icon small-2 medium-1 center"><button class="btn-naked" ng-click="incrementAmount()"><i class="icon-plus-squared beta"></i></button></div>
                    </div>
                    
                    <span class="margin-btm-small calc-control__title">I would like to repay {{ loan.frequencyText }}</span>
                    <div class="calc-controls__slider">
                        <div class="calc-controls__slider-icon small-2 medium-1 center"><button class="btn-naked" ng-click="decrementPaymentFrequency()"><i class="icon-minus-squared beta"></i></button></div>
                        <div ui-slider="limits.paymentFrequency" ng-model="loan.paymentFrequency" class="small-8 medium-10 global-slider" id="slider-length"></div>
                        <div class="calc-controls__slider-icon small-2 medium-1 center"><button class="btn-naked" ng-click="incrementPaymentFrequency()"><i id="plus-loan-length" class="icon-plus-squared beta"></i></button></div>
                    </div>
                </div>
                <span class="margin-btm-small calc-control__title">I would like to repay it over <input class="slider-input" id="TotalLengthOfLoan" name="TotalLengthOfLoan" ng-model="loan.duration" type="text" value="" /> {{ loan.frequencyText }} payment/s</span>
                <div class="calc-controls__slider">
                    <div class="calc-controls__slider-icon small-2 medium-1 center"><button class="btn-naked" ng-click="decrementDuration()"><i class="icon-minus-squared beta"></i></button></div>
                    <div ui-slider="limits.duration" ng-model="loan.duration" class="small-8 medium-10 global-slider" id="slider-length"></div>
                    <div class="calc-controls__slider-icon small-2 medium-1 center"><button class="btn-naked" ng-click="incrementDuration()"><i id="plus-loan-length" class="icon-plus-squared beta"></i></button></div>
                </div>
            </div>
            <div class="large-4">
                <div class="calc-results">
                    <div ng-show="loan.$valid()">
                        <p>Interest {{ loan.interestRate }}% <br /> Total repayment {{ loan.totalRepayment | currency:"&pound;" }}</p>
                        <p>Monthly repayment <br /> <strong class="mega">{{loan.payment | currency:"&pound;"}}</strong><br />({{ loan.representativeApr }}% Apr)</p>
                    </div>
                    <div ng-show="!loan.$valid()">
                        Express loans must be:
                        <ul>
                            <li>Between <strong>{{limits.amount.min | currency:"&pound;"}}</strong> and <strong>{{limits.amount.max | currency:"&pound;"}}</strong></li>
                            <li>Between <strong>{{limits.duration.min}}</strong> and <strong>{{limits.duration.max}}</strong> months</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul ng-show="loan.$valid()">
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="TotalAmountRepayable">Total amount repayable</label>
                    </div>
                    <div class="small-12 medium-8 large-4">
                        <div class="input-prepend">
                            {{ loan.totalRepayment | currency:"&pound;" }}
                        </div>
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="TotalLengthOfLoan">Loan term</label>
                    </div>
                    <div class="small-12 medium-8 large-4">
                        <div class="input-prepend">
                            <input id="TotalLengthOfLoan" name="TotalLengthOfLoan" type="hidden" value="" />
                            {{ loan.duration }}
                        </div>
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <label for="ReasonForLoan">Reason for loan</label>
                    </div>
                    <div class="small-12 medium-8 large-4">
                        <textarea cols="20" id="ReasonForLoan" name="ReasonForLoan" rows="4">
</textarea>
                        
                    </div>
                </div>
            </li>
        </ul>

        <input type="hidden" id="Payment" name="Payment" value="{{loan.payment}}"/>
        <input type="hidden" id="PaymentFrequency" name="PaymentFrequency" value="{{loan.paymentFrequency}}" />
        <input type="hidden" id="TotalAmountRepayable" name="TotalAmountRepayable" value="{{loan.totalRepayment}}"/>
        <input type="hidden" id="RepresentativeApr" name="RepresentativeApr" value="{{loan.representativeApr}}"/>
        <input type="hidden" id="InterestRate" name="InterestRate" value="{{loan.interestRate}}"/>
        <input type="hidden" id="Id" name="Id" value="00000000-0000-0000-0000-000000000000"/>
        <input type="hidden" id="LoanType" name="LoanType"/>

        <div ng-show="loan.$valid()" class="action-bar">
            <button type="submit" value="Next Step" class="btn btn-primary btn-large pull-right btn-icon icon-right-open">Next Step</button>
        </div>
    </div>
<input name='uformpostroutevals' type='hidden' value='88991CE926BC530E3312CA67076619E208CA49ACB759CAC08E4CA1B4EB80CB8AB1ACA6CD9E7EAFC13834F96D2364F1FC32BC241DDD2539C284F4F85C8BAC9355B44451BB9AE9DDE84D70D13F2CBC146D0957699172E8C3A7DE44E8292AD4744F2AD1D12BD8D88A05F3B21B8C4F3175D36E1A21F50D65D3CCB49E28BF4AF7057FB742974B76A2B8CA3DBF9CDB57172FCB4AF2999717750EDB77177EEEEF1818C25FB0DB6F860A7DF2CD25479D11A5E8954CC59F36A108913778F4F126F977A0AB096816E74C9C957D4215A5A743D3C4FBB405880C8453321F3BD7FF2E49173E9D' /></form>
<a href="../preparation/index55a5.php?type=&amp;a=&amp;t=&amp;f=#/?a=&t=&f=" class="btn-back remove-top"><i class="icon-left-open beta"></i> Back</a>


                </div>
            </div>
        </div>
    </div>
</div>


    <footer class="site-footer push--top" role="contentinfo">
        <div class="wrapper">
            <div class="medium-8">
                <div class="row row-small">
                    <div class="small-12 medium-4">
                        <a class="site-logo site-logo-footer" href="../../index.php"><img class="hide-on-mobile" src="../../Content/images/branding/logo.svg" alt="Airdrie Savings Bank"></a>
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
                    <li class="col"><a href="../../index.php"><i>Home</i></a></li>
                    <li class="col"><a href="#"><i>Personal products</i></a></li>
                    <li class="col"><a href="#"><i>Business products</i></a></li>
                    <li class="col"><a href="#"><i>Internet banking</i></a></li>
                    <li class="col"><a href="#"><i>Our ethos</i></a></li>
                    <li class="col"><a href="#"><i>Banking advice</i></a></li>
                    <li class="col"><a href="#"><i>Get in touch</i></a></li>
                    <li class="col"><a href="#"><i>Policies</i></a></li>
                    <li class="col"><a href="#"><i>Accessibility</i></a></li>
                </ul>
            </div>
            <div class="medium-8">
                <p class="delta margin-top-large margin-btm-xlarge"><i>Airdrie Savings Bank is authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the Prudential Regulation Authority. Our firm reference number is 204584.</i></p>
            </div>
        </div>
    </footer>

    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../../Content/js/jquery-ui.js"></script>
    <script src="../../Content/js/jquery.ui.touch-punch.min.js"></script>
    <script src="../../Content/js/foundation.reveal.js"></script>
    <script src="../../Content/js/responsiveslides.min.js"></script>
    <script src="../../Content/js/easyResponsiveTabs.js"></script>
    <script src="../../Content/js/scripts.js"></script>
    <script src="../../Content/js/applications.js"></script>

    <script src="../../app/scripts/angular.min.js"></script>
    <script src="../../app/scripts/slider.js"></script>
    <script src="../../app/app.js"></script>
    <script src="../../app/loanController.js"></script>
    <script src="../../app/expressLoanController.js"></script>
    <script src="../../app/loanService.js"></script>
    
    <!--Google-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-48958610-1', 'airdriesavingsbank.com');
        ga('send', 'pageview');

    </script>
    <!--Google-->

</body>

<!-- Mirrored from airdriesavingsbank.com/express-loan/step-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2016 12:05:33 GMT -->
</html>
