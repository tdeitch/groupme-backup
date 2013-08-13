GroupMe Backup
==============

This repo provides a PHP program to backup GroupMe using Twilio. Get a Twilio phone number, use this script as the SMS app, and add the number to your GroupMe chat. Whenever it gets a message, it'll add it to the log and you'll be able to view it from the web. 

Setup
-----

1. Get a Twilio phone number
2. Copy this repo to your web server
3. Move `info.json.example` to `info.json` and set it (see below)
4. If you're not using NearlyFreeSpeech.net, update the file paths in `backup.php`, `index.php`, and `update-images.php` so they're not reliant on the `$_SERVER['NFSN_SITE_ROOT']`, as they are now.

info.json
---------

You'll need to create an info.json file and put it somewhere that the script can read it, but other people can't. It should have the following format:

    {
        "groupname": "Our Fun Group!",
        "logfile": "protected/log.php",
        "password": "blah-SHA512_HASH-of-PASSWORD"
        "profiles": {
            "Alice": "alice",
            "Bob": "bsmith",
            "Charles": "charleydickens",
            "Daisy": "daisymae"
        }
    }

- "groupname": The name you want to call your group. This does not have to be the same as the name in GroupMe.
- "logfile": The file to read and write new messages to/from. Be sure it's not world-readable, but that it can be read by index.php and written to by backup.php.
- "password": An SHA512 hash of the password you want to use to (semi-)secure your chat.
- "profiles": A map from GroupMe nicknames to Facebook profile names, used to add profile pictures to the chat logs.
