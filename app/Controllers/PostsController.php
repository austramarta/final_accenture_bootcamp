<?php
class PostsController
{
    public function index(): string
    {
        $posts = PostsRepository::getPosts();

        return BaseView::generate('Posts', 'index', ['posts' => $posts, 'user' => 'Koļa']);
    }

    public function viewPost(): string
    {
        $postId = $_GET['id'] ?? 0; //iedod defaulto vērtību, lai nav error
        $post = PostsRepository::getPost($postId);

        return BaseView::generate('Posts', 'viewPost', [ 'post' => $post]);
    }
}
