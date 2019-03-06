var fs = require('fs')
var file = process.argv[2];
var obj = fs.readFileSync(file)
var str =obj.toString()
var split = str.split('\n')
var newline_length = split.length-1
console.log(newline_length)