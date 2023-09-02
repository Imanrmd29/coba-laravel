<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Iman",
        "email" => "imanramadhan@gmail.com",
        "image" => "img/img.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iman Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi molestiae magnam praesentium. Quidem ipsa cum minus natus iste consequatur inventore distinctio ipsam quibusdam praesentium excepturi soluta obcaecati suscipit quasi, deserunt voluptatibus, perspiciatis impedit, ab ut a nulla. Eos totam sequi nam voluptas fuga, dicta dolor. Quia placeat tempore reiciendis sed facilis, assumenda, minus omnis molestias ducimus labore enim non velit inventore deleniti hic temporibus tempora laudantium! Architecto dolor vel accusantium minus delectus recusandae maiores ad in quasi eligendi odit sequi facilis fugit fugiat voluptatibus asperiores amet aspernatur, dignissimos eius, fuga blanditiis nostrum nesciunt. Ipsam quos sapiente, harum rem dignissimos sint."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kim Sejeong",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magni quis ducimus repellendus ea. Tempora quis non totam autem voluptate, harum expedita velit earum asperiores ad eaque magnam minus. Non qui deserunt veritatis quaerat quia harum cum, aut velit, possimus vel ipsam laudantium aliquam fuga enim pariatur quam. Ratione in amet illum quasi necessitatibus animi cupiditate obcaecati harum doloremque, minima quas inventore, culpa libero. Iure, quod distinctio. Vel odio aut placeat adipisci, soluta neque eum consequuntur reiciendis reprehenderit itaque officiis cumque facere exercitationem, modi quasi, porro quod eveniet debitis laborum rem dolorem. Provident dignissimos asperiores accusamus suscipit. Aut maxime consequatur temporibus hic corporis velit ex exercitationem quas neque qui illo autem fugiat, facere saepe nostrum natus ratione in quibusdam. Corporis!"
        ],
        ];
        
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman Single Post
Route::get('post/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iman Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi molestiae magnam praesentium. Quidem ipsa cum minus natus iste consequatur inventore distinctio ipsam quibusdam praesentium excepturi soluta obcaecati suscipit quasi, deserunt voluptatibus, perspiciatis impedit, ab ut a nulla. Eos totam sequi nam voluptas fuga, dicta dolor. Quia placeat tempore reiciendis sed facilis, assumenda, minus omnis molestias ducimus labore enim non velit inventore deleniti hic temporibus tempora laudantium! Architecto dolor vel accusantium minus delectus recusandae maiores ad in quasi eligendi odit sequi facilis fugit fugiat voluptatibus asperiores amet aspernatur, dignissimos eius, fuga blanditiis nostrum nesciunt. Ipsam quos sapiente, harum rem dignissimos sint."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kim Sejeong",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magni quis ducimus repellendus ea. Tempora quis non totam autem voluptate, harum expedita velit earum asperiores ad eaque magnam minus. Non qui deserunt veritatis quaerat quia harum cum, aut velit, possimus vel ipsam laudantium aliquam fuga enim pariatur quam. Ratione in amet illum quasi necessitatibus animi cupiditate obcaecati harum doloremque, minima quas inventore, culpa libero. Iure, quod distinctio. Vel odio aut placeat adipisci, soluta neque eum consequuntur reiciendis reprehenderit itaque officiis cumque facere exercitationem, modi quasi, porro quod eveniet debitis laborum rem dolorem. Provident dignissimos asperiores accusamus suscipit. Aut maxime consequatur temporibus hic corporis velit ex exercitationem quas neque qui illo autem fugiat, facere saepe nostrum natus ratione in quibusdam. Corporis!"
        ],
        ];

        $new_post = [];
        foreach($blog_posts as $post){
            if($post["slug"] === $slug){
                $new_post = $post;
            }
        }

        return view('post',
        [
            "title" => "Single Post",
            "post" => $new_post
        ]);
    });