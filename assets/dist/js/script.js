$(".post-privacy-Dropdown-menu input[type=radio]").change(function(){
    let value = $(this).val();
    switch (value) {
        case "1":
            $("#post-privacy-button").html("<i class='fa fa-globe'></i> Public");
            break;
        case "2":
            $("#post-privacy-button").html("<i class='fa fa-users'></i> Friends");
            break;
        case "3":
            $("#post-privacy-button").html("<i class='fa fa-lock'></i> Only me");
            break;
        default:
            break;
    }
});



$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#file_upload').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});

$('[data-toggle="tooltip"]').tooltip();

