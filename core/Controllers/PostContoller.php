<?php

namespace Controllers;

use Models\Post;

class PostContoller
{
    public function post()
    {
        return view('post');
    }
    public function postPost()
    {
        $errors = [];
        if(!isset($_POST['name'])) $errors['name'][] = 'Нет поля name';
        if(!isset($_POST['description'])) $errors['description'][] = 'Нет поля description';


        if($errors != [])
            return view('post', compact('errors'));
        $post = new Post();
        $post = $post->create($_POST);
    }

}
