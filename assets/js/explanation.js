var questionId = 0;

jQuery(function () {
    if (jQuery('#explanation-ui').length)
    {

        $.ajax({
            type: "POST",
            url: "../get_explanation_data/",
            async: false,
            data: {"questionId": QUESTION_ID},
            success: function (response)
            {
                var data = $.parseJSON(response);
                questionId = data.id;
                // console.log(questionId); return;
                examName = data.name;
                examQuestions = data.questions;
                // Add answers to the current answers map if we have any
                if (data.answers && data.answers.length) {
                    for (var i = 0; i < data.answers.length; i++) {
                        var answer = data.answers[i];
                        currentAnswers[(answer.questionIndex - 1)] = answer.answerId;
                    }
                }
                loadExplanation(0);
                

                //re-active the first question
                jQuery('#question_nav_' + 0).addClass('active_question');
            }
        });
    }
    
});


/**
 * Load the specified question
 */
function loadExplanation(index) {

    if (index >= examQuestions.length)
    {
        index = 0;
    }
    currentQuestionIndex = index;

    var question = examQuestions[currentQuestionIndex];
    // Set some info in the ui
    jQuery('#question-index').text((currentQuestionIndex + 1));
    jQuery('#topic-name').html(question.topic);
    String.prototype.regex_question = function (regexp) {
        var matches = [];
        this.replace(regexp, function () {
            var arr = ([]).slice.call(arguments, 0);
            var extras = arr.splice(-2);
            arr.index = extras[0];
            arr.input = extras[1];
            matches.push(arr);
        });
        return matches.length ? matches : null;
    };
    var imgQues = question.text.regex_question(/[^\w\s]/gi);
    // console.log(question.text);
    var res = question.text.split(imgQues);
    jQuery('#question-text').html(question.text);
    // Displaying digits in box
    var digitContainer = jQuery(".digit1 .a");
    digitContainer.html(""); // Clear contents
    // For first digit
    var digit = jQuery("");
    digitContainer.html(res[0]);
    digitContainer.append(digitContainer);


    // For second digit
    var digitContainer1 = jQuery(".digit2 .c");
    digitContainer1.html(""); // Clear contents
    // For second digit
    var digit1 = jQuery("");
    digitContainer1.html(res[1]);
    digitContainer1.append(digitContainer1);

    var imgContainer = jQuery(".imgHolder-img1");
    imgContainer.html(""); // Clear contents

    var imgContainer1 = jQuery(".imgHolder-img2");
    imgContainer1.html(""); // Clear contents2

    if (question.image != '') {
        for (var i = 0; i < res[0]; i++) {
            var newImage = jQuery("<p class=\"a\"></p>");
            newImage.html(question.image);
            imgContainer.append(newImage);
        }
        for (var j = 0; j < res[1]; j++) {
            var newImage1 = jQuery("<p class=\"c\"></p>");
            newImage1.html(question.image);
            imgContainer1.append(newImage1);
        }
    }

    jQuery('#question-id').val(question.question_id);

    // Add the questions
    jQuery('#answers').empty();
    for (var i = 0; i < question.answers.length; i++) {

        var answer = question.answers[i];

        var li = jQuery('<li />');
        var radio = jQuery("<label class=\"btn\"><input type=\"radio\" name='answer' id='" + 'answer_' + i + "' /><i class=\"fa fa-circle-o fa-2x\"></i><i class=\"fa fa-check-circle-o fa-2x\"></i></label>");

        radio.val(answer.id);


        if (currentAnswers[currentQuestionIndex] && currentAnswers[currentQuestionIndex] == answer.id) {
            radio.attr('checked', 'checked');
        }

        var label = jQuery('<label />');
        label.attr('for', 'answer_' + i);
        label.html(answer.text);
        label.attr('class', 'question_choice');

        var span = jQuery('<label />');
        span.attr('for', 'answer_' + i);
        span.html(toWords(answer.text));
        span.attr('class', 'question_choice');

        li.append(radio);
        li.append(label);
        li.append(span);
        jQuery('#answers').append(li);
    }
    jQuery('#answers').append('</ul>');

    // Color the active question
    jQuery('#question_nav_' + index).addClass('active_question');

    // Handle the skip button
    if (currentQuestionIndex == examQuestions.length - 1) {
        jQuery('#skip-button').hide();
    } else {
        jQuery('#skip-button').show();
    }

} 
