<?php
class PostsRepository
{
    public static function getPosts(): array
    {
        $query = DB::$connection->query("SELECT * FROM posts");

        // $dataJson = file_get_contents(__DIR__ . '/../data/posts.json');
        // $posts = json_decode($dataJson, true);
        //šajā brīdī var arī amputēt data -> posts.json, kas ir augšā un aizstāt ar visu, kas ir apakšā ->


        $output = [];  //šo sauc par pārmapošanu (overmap?)
        while ($post = $query->fetchObject('Post')) {
            $output[] = $post;
        }

        return $output;
    }



    public static function getPost(int $id): ?Post //var atgriezt masīvu vai arī null
    {
        $query = DB::$connection->prepare("SELECT * FROM posts WHERE id = :id");   //query nekad nekad nedrīskt parādīties mainīgie!!!

        $query->execute(['id' => $id]); //prepared statement, kas padod mainīgo, ko ielikt jautājuma zīmē

        $post = $query->fetchObject('Post'); //pārveidodatus par objektu, lai zemāk nebūtu jālieto $postObj

        if (!$post) {
            return null;
        }

        return $post;
    }
}
