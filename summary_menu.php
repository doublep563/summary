<?php
/*
 * Created on 27 Feb 2014
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
$domain = "messages";
bindtextdomain($domain, "Modules/feed/locale");
bind_textdomain_codeset($domain, 'UTF-8');

$menu_dropdown[] = array('name' => "SummaryTH", 'path' => "summary/list", 'session' => "write", 'order' => 11);
?>