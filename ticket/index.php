<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>
<div id="landing-page">
    <?php
    if($cfg && ($page = $cfg->getLandingPage()))
        echo $page->getBodyWithImages();
    else
        echo  '<h1>'.__('Welcome').'</h1>';
    ?>
<div class="row">
    <div class="col-md-6">
        <h3><?php echo __('Open a New Ticket');?></h3>
            <br>
                <p>
                <?php echo __('Please provide as much detail as possible so we can best assist you. To update a ticket, please <a href="login.php">login</a>.');?>
                </p>
                <div class="button-box">
                    <a href="open.php" button type="button" class="btn btn-success btn-lg btn-block"><?php echo __('Open Ticket');?></a> 
                </div>
    </div>

    <div class="col-md-6">       
        <h3><?php echo __('Check Ticket Status');?></h3>
            <br>
                <p>
                <?php echo __('Check the status or update a ticket.');?>
                </p>
                <div class="button-box">
                    <a href="<?php if(is_object($thisclient)){ echo 'tickets.php';} else {echo 'view.php';}?>" button type="button" class="btn btn-primary btn-lg btn-block"><?php echo __('Check Ticket');?></a>
                </div>
    </div>
</div>
</div>
<div class="clear"></div>
<?php
if($cfg && $cfg->isKnowledgebaseEnabled()){
    //FIXME: provide ability to feature or select random FAQs ??
?>
<p><?php echo sprintf(
    __('Be sure to browse our %s before opening a ticket'),
    sprintf('<a href="kb/index.php">%s</a>',
        __('Frequently Asked Questions (FAQs)')
    )); ?></p>
</div>
<?php
} ?>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
