<div id="page-container">
    <div id="content-wrap">
        <?php
        if ($errors) {
            echo '<div class="row">';
            echo '  <div class="col">';
            echo '      <div class="alert alert-danger">';
            echo '          <ul>';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '          </ul>';
            echo '      </div>';
            echo '  </div>';
            echo '</div>';
        }
        ?>



        <!--breadcrumb-->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div aria-label="breadcrumb" class="breadcrumb-txt">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="breadcrumb-home-link" href="?">home</a></li>
                            <li class="breadcrumb-item active" aria-current="">login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- login form -->
        <div class="container-fluid text-center">
            <!-- yellow image -->
            <div class="login-background">
                <img class="background-image-register" src="images/mustard.png" alt="">
            </div>

            <div class="login-main-part">
                <!-- image left-->
                <div class="row">
                    <div class="image-register">
                        <img class="background-image-register-left" src="images/signin1.jpg" alt="">
                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <!-- title -->
                        <div>
                            <h4 class="login-title mb-5"> please sign in </h4>
                        </div>
                        <!-- form -->
                        <form class="login mt-3" action="?page=login" method="POST">
                            <!-- email -->
                            <div class="row">
                                <div class="col-xs-3 col-lg-4 col-centered login-input mb-2">
                                    <input type="text" class="form-control login-input-field" id="email-input" placeholder="email" name="email">
                                </div>
                            </div>
                            <!-- password -->
                            <div class="row">
                                <div class="col-xs-3 col-lg-4 col-centered login-input">
                                    <input type="password" class="form-control login-input-field" id="password-input" placeholder="password" name="password">
                                </div>
                            </div>
                            <!-- login btn -->
                            <div class="row mt-4">
                                <div class="col">
                                    <input type="submit" value="SIGN IN" class="btn btn-light btn-login">
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>