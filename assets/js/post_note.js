// Ajax post
$(document).ready(function () {
    $(".submit").click(function (event) {
        event.preventDefault();
        var comment_post = $("textarea#description").val();
        var topicID = $("input#topicID").val();
        var dataString = 'description='+ comment_post + '&topicID='+ topicID;
        if (comment_post === "")
        {
            alert("The note field is required before saving");
            return false;
        } else {


            jQuery.ajax({
                alert: "Yes",
                type: "POST",
                url: "http://sict-iis.nmmu.ac.za/eways/index.php/post_note",
                dataType: 'json',
                data: dataString,
                cache: false,
                success: function (res) {
                    if (res)
                    {
                        // Show Entered Value
                        jQuery("div#value").show();
                        $('div#value').delay(5000).fadeOut(400);
                        jQuery("div#value").html(res.comment_return);
//                        var getInput_notes =  jQuery("div#value").html(res.comment_return);
//                        localStorage.setItem("note_saved", getInput_notes);
                        jQuery("textarea#description").html(res.comment_post); 
                    } else {
                        jQuery("div#value").show();
                        jQuery("div#value").html(res.error);
                    }
                }

            });
        }
    });
});
