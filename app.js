const server = require('http').createServer();
const io = require('socket.io')(server);

io.on('connection', function(){
    console.log('Sockete birileri baglandi');
    Socket.on('disconnect', function(){
        console.log('birileri geldi ve getdi');
    });
});
server.listen(443);