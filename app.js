const io = require('socket.io')(8000);

io.on('connection', (socket) => {
  console.log('Yeni bir kullanıcı bağlandı.');

  // İstemciden gelen veriyi almak için dinleyici oluşturun
  socket.on('veri', (data) => {
    console.log('Alınan veri:', data);
  });

  // İstemciye veri göndermek için
  socket.emit('veri', 'Merhaba, istemci!');
});