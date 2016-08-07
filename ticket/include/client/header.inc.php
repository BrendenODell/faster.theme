<?php
$title=($cfg && is_object($cfg) && $cfg->getTitle())
    ? $cfg->getTitle() : 'osTicket :: '.__('Support Ticket System');
$signin_url = ROOT_PATH . "login.php"
    . ($thisclient ? "?e=".urlencode($thisclient->getEmail()) : "");
$signout_url = ROOT_PATH . "logout.php?auth=".$ost->getLinkToken();

header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html <?php
if (($lang = Internationalization::getCurrentLanguage())
        && ($info = Internationalization::getLanguageInfo($lang))
        && (@$info['direction'] == 'rtl'))
    echo 'dir="rtl" class="rtl"';
?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo Format::htmlchars($title); ?></title>
    <meta name="description" content="customer support platform">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/bootstrap.min.css" media="screen"/>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/osticket.css?8b927a0" media="screen"/>
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/theme.css?8b927a0" media="screen"/>
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/print.css?8b927a0" media="print"/>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>scp/css/typeahead.css?8b927a0"
         media="screen" />
    <link type="text/css" href="<?php echo ROOT_PATH; ?>css/ui-lightness/jquery-ui-1.10.3.custom.min.css?8b927a0"
        rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/thread.css?8b927a0" media="screen"/>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/redactor.css?8b927a0" media="screen"/>
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/font-awesome.min.css?8b927a0"/>
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/flags.css?8b927a0"/>
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/rtl.css?8b927a0"/>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/jquery-1.8.3.min.js?8b927a0"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/jquery-ui-1.10.3.custom.min.js?8b927a0"></script>
    <script src="<?php echo ROOT_PATH; ?>js/osticket.js?8b927a0"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/filedrop.field.js?8b927a0"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/jquery.multiselect.min.js?8b927a0"></script>
    <script src="<?php echo ROOT_PATH; ?>scp/js/bootstrap-typeahead.js?8b927a0"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/redactor.min.js?8b927a0"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/redactor-osticket.js?8b927a0"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/redactor-fonts.js?8b927a0"></script>
    <?php
    if($ost && ($headers=$ost->getExtraHeaders())) {
        echo "\n\t".implode("\n\t", $headers)."\n";
    }
    ?>
</head>
<body>
    <div id="container-fluid">
        <div id="header">
         
            <a class="pull-left" id="logo" href="<?php echo ROOT_PATH; ?>index.php"
            title="<?php echo __('Support Center'); ?>">
                <span class="valign-helper"></span>
                <img src="<?php echo ROOT_PATH; ?>logo.php" border=0 alt="<?php
                echo $ost->getConfig()->getTitle(); ?>">
            </a>
        </div><!-- .header -->
        <div class="clearfix"></div>
        
        <?php
        if($nav){ ?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid" >
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>
        </div><!-- .navbar-header -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                <li><a href="open.php">Open Ticket</a></li>
                <li><a href="view.php">Check Ticket</a></li>
                </ul>  
            </div><!-- .navbar-collapse -->
    </div><!-- .container -->
</nav>
        <?php
        }else{ ?>
         <hr>
        <?php
        } ?>
        <div id="content">

         <?php if($errors['err']) { ?>
            <div id="msg_error"><?php echo $errors['err']; ?></div>
         <?php }elseif($msg) { ?>
            <div id="msg_notice"><?php echo $msg; ?></div>
         <?php }elseif($warn) { ?>
            <div id="msg_warning"><?php echo $warn; ?></div>
         <?php } ?>
