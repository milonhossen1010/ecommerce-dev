(function ($) {
    $(document).ready(function () {
        $('.logout-btn').click(function (e) {
            e.preventDefault();
            $("#logout-form").submit();
        });


        //Img Preview Function
        function imgPreviewFunction(id, load_url) {
            $(id).change(function (e) {
                let file_url = URL.createObjectURL(e.target.files[0]);

                $(load_url).attr('src', file_url);
            });

        }

        //Logo load
        imgPreviewFunction('#dark-logo', '#dark-logo-load');
        imgPreviewFunction('#light-logo', '#light-logo-load');

        //Client image show
        imgPreviewFunction('#cl1', '#cl1-load');



        $("a.delete_notice").click(function(){
            if (confirm("Are You Sure?")) {
                return true;
            } else {
                return false;
            }

            
        });



        $('.delete_notification').click(function (e) {
            e.preventDefault();
            let link = $(this).attr('href');
           // alert(link);
            //reset();
            alertify.confirm("This is a confirm dialog", function (e) {
                if (e) {
                    alertify.success("You've clicked OK");
                    window.location.href = link;
                } else {
                    alertify.error("You've clicked Cancel");
                    return false;
                }
            });

          
          

        });










    });
})(jQuery)
