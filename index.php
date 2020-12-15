<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>rblxcondo.tk | home page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <link rel="stylesheet" href="assets/css/site.min.css">

        <!--
            Snipped Out Metadata <3

            Sorry :(
         -->

        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/toastr.min.css">
        
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    </head>
    <body class="layout-row">
        <div class="flex">
            <div class="w-xl mx-auto py-5">
                <div class="p-4 d-flex flex-column h-100">
                    <a href="index.html" class="navbar-brand align-self-center">
                        <span class="hidden-folded d-inline l-s-n-1x align-self-center">rblxcondo.tk</span>
                    </a>
                </div>
                <div class="card">
                    <div id="content-body">
                        <div class="p-3 p-md-5 text-center" >
                            <a id="status"> Checking for available condos... </a>
                        </div>
                    </div>
                </div>
                <div class="text-center text-muted">&copy; Copyright. rblxcondo.tk</div>
            </div>
        </div>
        <script src="assets/js/toastr.min.js"></script>
        <script src="assets/js/site.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            
            $.ajax({
                type: "POST",
                url: 'process.php',
                data: { form_submission: "getGame", game_id: "<?php echo (isset($_GET["2"])) ? "2" : "1"; ?>" },
                success:  function(response, status, xhr, $form) {
                    console.log(response);
                    if(response == "n/a")
                    {
                        toastr.error("No Games Are Available At This Time!");  
                        $("#status").text("No Games Are Available At This Time!");
                    } 
                    else {
                        toastr.success("Teleporting You To The Condo!");  
                        $("#status").text("Teleporting You To The Condo!");
                        window.location = response;
                    }
                }
            });
        </script>
    </body>
</html>