const http = require('http');
const server = http.createServer();
const io = require('socket.io')(server);

io.on('connection', (socket) => {
  console.log('Yeni bir kullanıcı bağlandı');
  // İşlemleriniz burada gerçekleştirilir
});

server.listen(3000, () => {
  console.log('Sunucu çalışıyor: http://localhost:3000');
});
