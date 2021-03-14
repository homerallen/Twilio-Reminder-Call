const accountSid = process.env.TWILIO_ACCOUNT_SID;
const authToken = process.env.TWILIO_AUTH_TOKEN;

const client = require('twilio')(accountSid, authToken);

client.calls
      .create({
      	 url: "http://homerallen.com/simple_gather.php",
         to: process.env.TWILIO_TO,
         from: process.env.TWILIO_FROM,
         machineDetection: "Enable"
       })
       .then(call => console.log(call.sid));



       