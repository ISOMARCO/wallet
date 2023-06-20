const https = require('https');
const fs = require('fs');

const options = {
  key: fs.readFileSync('privatekey.pem'),
  cert: fs.readFileSync('certificate.pem')
};

const server = https.createServer(options, (req, res) => {
  console.log('A new request received.');

  // Handle the request and send a response
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.write('Hello from the server!');
  res.end();
});

server.listen(8000, () => {
  console.log('Server is listening on port 8000.');
});