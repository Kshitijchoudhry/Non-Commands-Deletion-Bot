# Non-Commands-Deletion-Bot
Deploy this to delete non-commands messages in any Group.

## Deploy for Free at Vercel.com (formarly zeit.co and now.sh)

* Import this repo as private.
* Get an account at [vercel.com](https://vercel.com)
* Add your bot token in Line 3 of `/api/bot.php`
* Add your Telegram ID (for Admin's) in Line 36 of `/api/bot.php`, you can add multiple too.
* Deploy the app.
* Get that url from [vercel.com](https://vercel.com) after deployment.
* Create a webhook using below.
* https://api.telegram.org/bot{my_bot_token}/setWebhook?url={url_to_send_updates_to}
* eg. if bot token is `123:AAABBBCCC` and URL is `https://BBB.COM/api/bot.php` then
* `https://api.telegram.org/bot123:AAABBBCCC/setWebhook?url=https://BBB.COM/api/bot.php`
* When you open this URL with required field's It should say webhook set or when you try again It'll say webhook already set.
* Don't fork and edit. Use Import Repo option at GitHub and keep code private.


## Heroku

* Change `index.html` to `index.php`
* Add your bot token in Line 3 of `/api/bot.php`
* Add your Telegram ID (for Admin's) in Line 36 of `/api/bot.php`, you can add multiple too.
* Create an App at Heroku and Connect your GitHub Account.
* Deploy the Heroku App.
* Create a webhook using below.
* https://api.telegram.org/bot{my_bot_token}/setWebhook?url={url_to_send_updates_to}
* eg. if bot token is `123:AAABBBCCC` and URL is `https://BBB.COM/api/bot.php` then
* `https://api.telegram.org/bot123:AAABBBCCC/setWebhook?url=https://BBB.COM/api/bot.php`
* When you open this URL with required field's It should say webhook set or when you try again It'll say webhook already set.
* Don't fork and edit. Use Import Repo option at GitHub and keep code private.

## PHP Server

* Download and Extract the api folder to root or where you want to deploy.
* Add your bot token in Line 3 of `/api/bot.php`
* Add your Telegram ID (for Admin's) in Line 36 of `/api/bot.php`, you can add multiple too.
* Create a webhook using below.
* https://api.telegram.org/bot{my_bot_token}/setWebhook?url={url_to_send_updates_to}
* eg. if bot token is `123:AAABBBCCC` and URL is `https://BBB.COM/api/bot.php` then
* `https://api.telegram.org/bot123:AAABBBCCC/setWebhook?url=https://BBB.COM/api/bot.php`
* When you open this URL with required field's It should say webhook set or when you try again It'll say webhook already set.
* Don't fork and edit. Use Import Repo option at GitHub and keep code private.

`Note: Vercel.com is recommened as it is free forver and it doesn't sleeps like heroku free apps.`

## Credits

* [Telegram Bot PHP](https://github.com/Eleirbag89/TelegramBotPHP)
* Created by [Parveen Bhadoo](https://github.com/ParveenBhadooOfficial/Non-Commands-Deletion-Bot)
