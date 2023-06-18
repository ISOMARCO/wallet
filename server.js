const http = require('http');
const server = http.createServer();
const io = require('socket.io')(server);

io.on('connection', (socket) => {
  console.log('Yeni bir kullanıcı bağlandı');
  // İşlemleriniz burada gerçekleştirilir
});

server.listen(3001, '127.0.0.1', () => {
  console.log('Sunucu çalışıyor: http://wallet.iso.com.az');
});