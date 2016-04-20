$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="panel panel-default"><div class="panel-heading">Option 1</div><div class="panel-body"><div class="row"><div class="col-xs-6"><label>Question</label><input type="text" class="form-control required" name="question[]" value="" /></div><div class="col-xs-1" style="padding-top:30px;">=</div><div class="col-xs-5"><label>Answer</label><input type="text" class="form-control required" name="answer[]" value="" /></div></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});