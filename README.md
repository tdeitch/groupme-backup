GroupMe Backup
==============

This repo provides a PHP program to backup GroupMe using Twilio.

info.json
---------

The info.json file should have the following format:

    {
        "GroupName": "Our Fun Group!",
        "LogFile": "log.html",
        "profiles": {
            "Alice": "alice",
            "Bob": "bsmith",
            "Charles": "charleydickens",
            "Daisy": "daisymae"
        }
    }

where "profiles" is a map from GroupMe nicknames to Facebook profile names.
