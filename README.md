# WP Telegram Notification MU-Plugin

This is a WordPress must-use (MU) plugin that sends a notification to a specified Telegram chat every time a post is published on your WordPress website. It uses the Telegram Bot API and requires a bot token, which can be obtained from [BotFather](https://core.telegram.org/bots#botfather) on Telegram.

## Features

- Sends a notification to a Telegram chat whenever a post is published.
- Customizable message content.
- Lightweight and easy to configure.

## Requirements

- WordPress 4.7 or higher
- PHP 7.0 or higher
- A Telegram bot token (You can create one using BotFather on Telegram)

## Installation

1. **Create a Telegram Bot:**
   - Open Telegram and search for `@BotFather`.
   - Start a chat with `@BotFather` and follow the instructions to create a new bot.
   - Once the bot is created, you will receive a bot token. Save this token as you will need it later.

2. **Download the Plugin:**
   - Clone this repository or download the zip file and extract it.

3. **Upload to WordPress MU-Plugin Directory:**
   - Upload the extracted folder to your WordPress `wp-content/mu-plugins/` directory.
   - Rename the folder to `wp-telegram-notification` if it isn't already.

4. **Configure the Plugin:**
   - Open the `wp-telegram-notification.php` file in a text editor.
   - Replace `YOUR_TELEGRAM_BOT_TOKEN` with your actual Telegram bot token.
   - Replace `YOUR_CHAT_ID` with the chat ID where you want to receive notifications. You can get the chat ID by sending a message to your bot and visiting `https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getUpdates` to see the chat ID in the response.

5. **Activate the Plugin:**
   - Since this is an MU-Plugin, it will automatically be activated. No further action is required.

## Customization

You can customize the message sent to Telegram by editing the message content in the `wp-telegram-notification.php` file line 37.
