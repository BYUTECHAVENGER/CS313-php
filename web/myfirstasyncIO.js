var fs = require('fs')
var file = process.argv[2];


fs.readFile(file, callback)
function callback (err, obj){

    if err == true{
        console.log("THIS MUCH IS TRUE")  
    }
    else {

    


  var str =obj.toString()
  var split = str.split('\n')
  var newline_length = split.length-1
  console.log(newline_length)
    }
}
