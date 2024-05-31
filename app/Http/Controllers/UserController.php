<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = [
            [
                "id" => 1,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 2,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 3,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 4,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 5,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 6,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 7,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 8,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 9,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ],
            [
                "id" => 10,
                "fullname" => "Bobby putransyah",
                "email" => "bbyptrnsyah11@gmail.com",
                "password" => "$2a$15SET82jytXVFglD...",
            ]
        ];

        return view("testing", [
            "users" => $users
        ]);
    }
}
