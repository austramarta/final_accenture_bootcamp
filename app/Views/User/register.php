<div id="page-container">
    <div id="content-wrap">


        <?php
        if ($errors) {
            echo '<div class="row">';
            echo '  <div class="col">';
            echo '      <div class="alert justify-content-center">';
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
                <div class="col-sm">
                    <div aria-label="breadcrumb" class="breadcrumb-txt">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="breadcrumb-home-link" href="?">home</a></li>
                            <li class="breadcrumb-item active" aria-current="">register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid text-center">
           <!-- green image -->
        <div class="register-background">
                <img class="background-image-register" src="images/teal.png" alt="">
            </div>

            <div class="register-main-part justify-content-center">
                <!-- image left-->
                <div class="row">
                        <div class="image-register">
                            <img class="background-image-register-left" src="images/register1.jpg" alt="">
                        </div>
                    </div>

                <div class="row">
                    <div class="col-sm">
                        <!-- registration form -->
                        <form action="?page=registration" method="POST">
                            <!-- title -->
                            <div>
                                <h4 class="register-title mb-5"> considering to return? </h4>
                            </div>

                            <div class="row">
                                <div class="col-xs-3 col-lg-4 col-centered mb-2">
                                    <input type="text" class="form-control register-input-field" id="email-input" placeholder="email" name="email">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-3 col-lg-4 col-centered mb-2">
                                    <input type="text" class="form-control register-input-field" id="first-name-input" placeholder="first name" name="first-name">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-3 col-lg-4 col-centered mb-2">
                                    <input type="text" class="form-control register-input-field" id="last-name-input" placeholder="last name" name="last-name">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-3 col-lg-4 col-centered mb-2">
                                    <input type="password" class="form-control register-input-field" id="password-input" placeholder="password" name="password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-3 col-lg-4 col-centered mb-2">
                                    <input type="password" class="form-control register-input-field" id="password2-input" placeholder="repeat password" name="password2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-centered col-sm">
                                    <input type="submit" value="REGISTER" class="btn btn-register">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>