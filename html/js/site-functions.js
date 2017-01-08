//This controls the face blink
function function2() {
    $(".face").text('0.0');
}
$(function() {
    setInterval(function() {
        $(".face").text('-.-');
        setTimeout(function2, 120);
    }, 5000);

});
//Update progress bar
var finished = false;
var timeleft = 80;
var downloadTimer = setInterval(function() {
    document.getElementById("progressBar").value = 80 - --timeleft;
    if (timeleft <= 0)
        clearInterval(downloadTimer);
    if ($('#example-title').is(':empty')) {
        // we're empty. do stuff.
    } else {
        timeleft = 0;
        document.getElementById("progressBar").value = 80;
        $('#showbutton').show();
        $("#status").text('Finished!').fadeIn(400);
        finished = true;
    }
}, 1000);
//This runs the php that runs the shell script that returns the result for display
$(function() {
    $('#example-title').load("result.php");
});
//Change the div example titles to these various strings until finished
$(function() {
    count = 0;
    wordsArray = ["Decompressing file...", "Listening...", "Reticulating Splines...", "Listening...", "Asking the Neural Net...", "Getting Result..."];
    setInterval(function() {
        if (count < 5 && finished == false) {
            count++;
            $("#status").fadeOut(400, function() {
                $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
            });
        }
    }, 12000);
});

//Show classify another button after 80 seconds
$(function() {
    $('#showbutton').hide();
    $('#showbutton').delay(80000).fadeIn('slow');
});