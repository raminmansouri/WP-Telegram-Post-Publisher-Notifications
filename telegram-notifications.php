<?php
/*
Plugin Name: Telegram Channel Notifications
Description: Sends notifications to a Telegram channel when a new post is published.
Version: 1.0
Author: Ramin Mansouri
*/

// Your Telegram bot API token
define('TELEGRAM_BOT_TOKEN', '6585924951:AAGDZtZU2-WRax3OWRpGIwNtppZkEpUI_Kw');
// Your Telegram channel ID
define('TELEGRAM_CHANNEL_ID', '-1002068835331');

// Function to send a message to the Telegram channel
function send_telegram_message($message) {
    $url = 'https://api.telegram.org/bot' . TELEGRAM_BOT_TOKEN . '/sendMessage';
    $args = array(
        'body' => array(
            'chat_id' => TELEGRAM_CHANNEL_ID,
            'text' => $message
        )
    );
    $response = wp_remote_post($url, $args);

    if (is_wp_error($response)) {
        error_log('Error sending message to Telegram: ' . $response->get_error_message());
    }
}

// Hook into the publish_post action to send a message when a new post is published
function notify_telegram_on_new_post($ID, $post) {
    // Check if the notification has already been sent
    if (get_post_meta($ID, '_telegram_notification_sent', true)) {
        return;
    }

    $message = 'مقاله جدید منتشر شد: ' . get_the_title($ID) . "\n\n" . get_permalink($ID);
    send_telegram_message($message);

    // Mark the notification as sent
    update_post_meta($ID, '_telegram_notification_sent', '1');
}
add_action('publish_post', 'notify_telegram_on_new_post', 10, 2);
