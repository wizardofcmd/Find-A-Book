$("reviewForm").each(function() {
    $(this).find(':input[type="submit"]').prop('disabled', true);
});
function correctCaptcha() {
    $("reviewForm").each(function() {
        $(this).find(':input[type="submit"]').prop('disabled', false);
    });
}
