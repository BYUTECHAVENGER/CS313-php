//console.log(process.argv)
array = process.argv;
var i;
var sum =0;

for (i = 2; i < array.length; ++i) {
    
    sum += Number(array[i]);
}

console.log(sum);