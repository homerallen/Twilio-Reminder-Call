# Twilio-Reminder-Call
Calls a number every X seconds until call is answered and 1 is pressed to confirm.

If a voicemail picks up, the script will call back the recipient every 20 seconds until the call is answered.

Once answered, the script asks the recipient to press 1 to confirm and waits 5 minutes for that response.

If another digit other than 1 is pressed when prompted, 1 will be asked for, and the script will wait 5 minutes for a response.
