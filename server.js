const http = require('http');
const server = http.createServer();
const io = require('socket.io')(server);

io.on('connection', (socket) => {
  console.log('Yeni bir kullanıcı bağlandı');
  // İşlemleriniz burada gerçekleştirilir
});

server.listen(80, 'wallet.iso.com.az', () => {
  console.log('Sunucu çalışıyor: http://wallet.iso.com.az');
});