$(document).ready(function () {
    $("#loading-background").transition({
        opacity: 0,
        duration: 1000,
        delay: 100,
        complete: function() {
            $(this).remove();
        }
    });
});
