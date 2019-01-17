function clickMe() {
    alert("Clicked!");


}

function changeColor(){
    var textbox_id = "txtColor";
    var textbox = document.getElementById(textbox-id);

    var div_id = "div1";
    var div = document.getElementById(div_id);



        //verify values
    var color = textbox.nodeValue;
    div.stylelbackgroundColor = color;
}