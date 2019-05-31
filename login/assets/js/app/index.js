/**
 * Validate and submit a new comment form.
 */
$("#new-comment-form").validate({
    rules: {
        comment: "required"
    },
    submitHandler: function(form) {
        AS.Http.submit(form, {
            action: "postComment",
            comment: form['comment'].value
        }, function (response) {
            if($("#comment-list blockquote").length >= 7) {
                $("#comment-list blockquote").last().remove();
            }

            $("#comment-list").prepend(buildNewCommentElement(response));
        });
    }
});

/**
 * Build a new comment HTML from a response received from the server.
 * @param response
 * @returns {jQuery|HTMLElement}
 */
function buildNewCommentElement(response) {
    var html  = "<blockquote class='blockquote mb-4 border-left pl-3 pt-2 pb-2'>";
        html += "   <p class='mb-2'>"+response.comment+"</p>";
        html += "   <footer class='blockquote-footer'>";
        html += "       <strong>" + response.user + "</strong>";
        html += "       <em>" + $_lang.at + " " + response.postTime + "</em>";
        html += "   </footer>";
        html += "</blockquote>";

    return $(html);
}
