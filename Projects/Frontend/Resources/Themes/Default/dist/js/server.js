const server = require('http').createServer();
const io = require('socket.io')(server);

io.on("connection", function(){
    console.log("Biri sockete baglandi");
    socket.on("disconnect", function(){
        console.log("Biri geldi ve getdi");
    });
});

server.listen(3000);