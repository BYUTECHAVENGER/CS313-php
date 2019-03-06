
var fs = require('fs');
var path = require('path');

var dirPath = process.argv[2];

var extType = process.argv[3];

fs.readdir(dirPath, callback);



function callback (err, list){

    if err == true{
        console.log("THIS MUCH IS TRUE")  
    }
    else {
        var i;

for (i = 0; i < array.length; ++i) {
    
    var ext = path extname(list[i]);
    
    if (ext === ("." + extType)) {
        console.log(array[i]);
    }

}