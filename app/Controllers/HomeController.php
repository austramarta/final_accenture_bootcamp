
<?php

class HomeController
{
    public function index()
    {
        $posts = PostsRepository::getPosts();

        return BaseView::generate('Home', 'index',['posts' => $posts, 'user' => 'Koļa']);
    }
}