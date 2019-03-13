const express = require("express")
const app = express()
app.use(express.static("myStatics")) //get static file from myStatic directory
app.set('view engine', 'ejs');
app.set('views', 'resultView');

app.get("/math", function(req, res){
   var valueOne =Number(req.query.value1); //Get the "name = value" from the form
    var valueTwo = Number(req.query.value2);
    var operator = req.query.operators; 

    if (operator == "add") {
        var answer = valueOne + valueTwo;
    } else if(operator == "sub"){
        var answer = valueOne - valueTwo;
    }else if(operator == "mult"){
        var answer = valueOne * valueTwo; 
    } else if(operator == "div"){
        var answer = valueOne / valueTwo;
    }
    console.log(answer);
   var resultJson = {result : answer};  
   res.render("result", resultJson);
});
app.get("/math_service", function(req, res) {
    
    var valueOne =Number(req.query.value1); //Get the "name = value" from the form
    var valueTwo = Number(req.query.value2);
    var operator = req.query.operators; 

    if (operator == "add") {
        var answer = valueOne + valueTwo;
    } else if(operator == "sub"){
        var answer = valueOne - valueTwo;
    }else if(operator == "mult"){
        var answer = valueOne * valueTwo; 
    } else if(operator == "div"){
        var answer = valueOne / valueTwo;
    }
    console.log(answer);
    var resultJson = {result : answer};  
   res.json(resultJson);
});

app.listen(2000, function(){
console.log("The is up and listernining to port ANDRE2000 #MAKITFUNKY")
})