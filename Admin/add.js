$(document).ready(function(){
    var addButton = $('#add_button');
    var x = 1;
    var fieldHTMLKegiatan = '<input class="form-control">'
    $("#add_button").click(function(){
        //Check maximum number of input fields
        if(x < 10){ 
            x++; //Increment field counter
            $("#activity").append(fieldHTMLKegiatan); //Add field html
            // $("#biaya").append(fieldHTMLBiaya); //Add field html
        }
    });
});