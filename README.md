GroupMe Backup
==============

This repo provides a PHP program to backup GroupMe using Twilio.

info.json
---------

The info.json file should have the following format:

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

where "profiles" is a map from GroupMe nicknames to Facebook profile names.
