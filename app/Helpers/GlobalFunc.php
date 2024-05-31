<?php

namespace App\Helpers;

class GlobalFunc
{
    public $menu = [
        'admin' => [
            [
                'title' => "Daftar Absen",
                'url' => "/admin/absen"
            ],
            [
                'title' => "logout",
                'url' => "/logout"
            ]
        ],

        'peserta' => [
            [
                'title' => "Absen Peserta",
                'url' => "/peserta/absen"
            ],
            [
                'title' => "logout",
                'url' => "/logout"
            ]
        ]

    ];

    public function getMenu($role)
    {
        if ($role == 1) {
            return $this->menu['admin'];
        } else {
            return $this->menu['peserta'];
        }
    }

    public $dates = ["1" => '2024-05-20', "2" => '2024-05-21', "3" => '2024-05-22',  "4" => '2024-05-23', "5" => '2024-05-24', "6" => '2024-05-25', "fp" => '2024-05-26'];

    //  public function startQueryLog()
    //  {
    //        \DB::enableQueryLog();
    //  }

    //  public function showQueries()
    //  {
    //       dd(\DB::getQueryLog());
    //  }

    public static function instance()
    {
        return new GlobalFunc();
    }
}
