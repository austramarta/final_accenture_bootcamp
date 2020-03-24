<div id="page-container">
  <div id="content-wrap">

    <!--breadcrumb-->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div aria-label="breadcrumb" class="breadcrumb-txt">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="breadcrumb-home-link" href="?">home</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-home-link" href="?page=posts">articles</a></li>
              <li class="breadcrumb-item active" aria-current="">article</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- article itself -->
    <div class="container-fluid article-container">

      <div class="row">
        <div class="col-6">
          <section>
            <img class="separate-article-image" src="<?php echo $post->image; ?>">
          </section>
        </div>
      </div>

      <div class="col-6">
        <section>
          <h4 class="separate-article-title"> <?= $post->title; ?> </h4>

          <h6 class="separate-article-text"> <?php echo $post->text; ?>
        <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A delectus nisi, 
        dicta qui ipsa deserunt voluptas vitae eaque animi ipsam commodi 
        officiis dolores alias nobis, neque, libero aut perferendis vel.
        <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A delectus nisi, 
        dicta qui ipsa deserunt voluptas vitae eaque animi ipsam commodi 
        officiis dolores alias nobis, neque, libero aut perferendis vel.
        <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A delectus nisi, 
        dicta qui ipsa deserunt voluptas vitae eaque animi ipsam commodi 
        officiis dolores alias nobis, neque, libero aut perferendis vel.
        </h6>
        </section>

      </div>


    </div>







  </div>
</div>