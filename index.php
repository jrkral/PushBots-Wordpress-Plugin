<?php 
/*
Plugin Name: PushBots - Web Push Notifications
Plugin URI: https://www.pushbots.com/
Description: Reach out to your Wordpress visitors with browser desktop push notifications
Author: PushBots
Author URI: https://github.com/PushBots
Version: 1.0.5
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) {
  exit;
}
require_once __DIR__ . "/pushbots.php";

$wpPushBots = new WPPushBots();

