var http = require("http");
var server = module.exports = {};

server.start = function () {
    function onRequest(request, response) {
       console.log("Request received.");
       response.writeHead(200, {"Content-Type": "text/plain"});
       response.write("Hello World");
       response.end();
    }
    http.createServer(onRequest).listen(10000);
    console.log("Server has started.");
};