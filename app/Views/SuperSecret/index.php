<div id="page-container">
    <div id="content-wrap">

        <!--breadcrumb-->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div aria-label="breadcrumb" class="breadcrumb-txt">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="breadcrumb-home-link" href="?">home</a></li>
                            <li class="breadcrumb-item active" aria-current="?page=chat">chat</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>




        <!-- chat-box -->
        <div class="container-fluid chat-container">
            <!-- orange image -->
            <div class="chat-background">
                <img class="background-image-chat" src="images/orange.png" alt="">
            </div>

            <div class="chat-main-part justify-content-center"> 
            <!-- image left-->
                <div class="row">
                    <div class="image-chat">
                        <img class="background-image-chat-left" src="images/chat_image.jpg" alt="">
                    </div>
                </div>

                <!--chat title-->
                <div class="row">
                    <div class="col mb-5">
                        <h4 class="chat-title"> hey you, let's talk! </h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-centered mb">
                        <p><input type="text" id="username" placeholder="first name"></p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-centered">
                        <div class="text-center">
                            <p>
                                <textarea id="message" class="form-control chat-text-area" placeholder="type your message here"></textarea>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-centered">
                        <button type="button" class="btn btn-outline-light my-3" id="send-btn">SEND</button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-centered mb-2">
                        <div class="mb-5" id="chat-box"></div>
                    </div>
                </div>
            </div>


        </div>