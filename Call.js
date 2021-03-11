const accountSid = process.env.TWILIO_ACCOUNT_SID;
const authToken = process.env.TWILIO_AUTH_TOKEN;
const client = require('twilio')(accountSid, authToken);

client.calls
      .create({
         twiml: '<Response><Say>This is a reminder</Say></Response>',
         to: process.env.TWILIO_TO,
         from: process.env.TWILIO_FROM
       })
      .then(call => console.log(call.sid));