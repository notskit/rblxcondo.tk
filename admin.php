<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>rblxcondo.tk | admin panel</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <link rel="stylesheet" href="./assets/css/site.min.css">

        <script src="https://skrrt.xyz/admin/js/jquery-2.1.3.min.js"></script>
        <script src="https://skrrt.xyz/admin/js/jquery-ui.js"></script>
        <script src="https://skrrt.xyz/admin/js/bootstrap.min.js"></script>
        
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link rel="icon" 
        type="image/png" 
        href="https://skrrt.xyz/assets/img/favicon.ico">
    </head>
    <body class="layout-row">
        <div class="flex">
            <div class="w-xl w-auto-sm mx-auto py-5">
                <div class="p-4 d-flex flex-column h-100">
                    <a href="index.html" class="navbar-brand align-self-center">
                        <span class="hidden-folded d-inline l-s-n-1x align-self-center">rblxcondo.tk</span>
                    </a>
                </div>
                <div class="card">
                    <div id="content-body">
                        <div class="p-3 p-md-5">
                            <form role="form" action="process.php" method="POST" id="form-update">
                                <div class="form-group">
                                    <label>Variation One</label> 

                                    <input type="username" name="game1" class="form-control" placeholder="Enter Game Link">
                                </div>
                                <div class="form-group">
                                    <label>Variation Two</label> 

                                    <input type="username" name="game2" class="form-control" placeholder="Enter Game Link">
                                </div>
                                <button type="submit" class="btn btn-primary mb-4" >Update</button>
                                <input type="hidden" name="form_submission" value="update">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center text-muted">&copy; Copyright. rblxcondo.tk</div>
            </div>
        </div>
        <script src="./assets/js/site.min.js"></script>
    </body>
</html>