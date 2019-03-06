

const http = require('http');
const url = require('url');
const server = http.createServer(function onRequest(req, res) {
    const urlObject = url.parse(req.url, true);
    const userPath = (urlObject.pathName);


if (req.url === '/home') {
    userPath
    res.writeHead(200, {"Content-Type": "text/html"});
    res.write("<H1>Welcome to the home page, DAVE</H1>");
    res.end();
}

else if (req.url === '/getdata') {
    res.writeHead(200, {"Content-Type": "application/json"});
    res.write(JSON.stringify(["Paulie Snyder"+"Br. Lyon"+"class"+"cs313"]));
    res.end();
}
else {
    res.writeHead(404, {"Content-Type": "text/html"});
    res.write("<H1><br><br>404: <br><br> Page Not Found <br><br> I\'m sorry, Dave. I\'m afraid I can\'t do that. </H1>");


}
});


server.listen(8888);
console.log('I\'m Listening on port 8888 DAVE............');
