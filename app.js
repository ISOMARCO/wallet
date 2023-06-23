const server = require('http').createServer();
const io = require('socket.io')(server);

io.on('connection', function(socket){
  console.log('sockete birileri baglandi');
});

server.listen(8443);