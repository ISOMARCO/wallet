const server = require('http').createServer();
const io = require('socket.io')(server);

var connection = new io.connect('194.163.181.227:2083', {
    'reconnection': true,
    'reconnectionDelay': 1000,
    'reconnectionDelayMax' : 5000,
    'reconnectionAttempts': 5
});
console.log(connection);
server.listen(2083);