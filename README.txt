Library Hours Module
by: Matt McCollow <mccollo@mcmaster.ca>
-----

This module reads a public Google Calendar and returns events in a block. It's intended to be used for libraries, particularly academic libraries where there may be several locations on a campus that you want to show hours for. Once installed, here's what you have to do to get it to work:

1. Create a public Google Calendar.
2. In your Drupal installation, go to Admin->Settings->Library Hours and enter you Google account name, password, and shared calendar ID (you can get this from your shared calendar's settings page on Google).
3. Go to Admin->Site Building->Blocks and configure the Library Hours block.

The title of each event in your Google Calendar will be used as the "location" name in the Library Hours block. For example, if you want an entry for the hours of Mills Library, name the event "Mills Library" in Google Calendar.

This module currently supports only one public calendar feed.