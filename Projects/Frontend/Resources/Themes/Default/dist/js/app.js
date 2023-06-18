const server = require('http').createServer();
const io = require('socket.io')(server);
io.on('connection', function(socket){
    console.log('Sockete birileri baglandi');
    socket.on('disconnect', function(){
        console.log('birileri geldi ve getdi');
    });
});
server.listen(443);