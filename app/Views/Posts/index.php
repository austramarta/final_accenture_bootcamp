<div id="page-container">
  <div id="content-wrap">

    <!--breadcrumb-->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div aria-label="breadcrumb" class="breadcrumb-txt">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="breadcrumb-home-link" href="?">home</a></li>
              <li class="breadcrumb-item active" aria-current="?page=posts">articles</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- ¯\_(ツ)_/¯ -->


    <div class="container-fluid articles-container">
      <div class="row">

        <div class="col-sm">

          <div class="container articles-container" data-0="transform:translateX(0%)" data-4000="transform:translateX(-300%)">
            <?php foreach ($posts as $post) {
              echo '<section>
                <div class="imgBx">
                  <img src="' . $post->image . '">

                    <div class="storyBx">
                      <img class="articles-title-back" src="images/orange.png" alt="">
                       <h1 class="article-title">
                       <a class="articles-title" href="?page=post&id=' . $post->id . '">'  . $post->title . '</a> 
                       </h1> 
                    </div>

                </div>
              </section>';
            } ?>
          </div>
        </div>
      </div>


    </div>



  </div>
</div>