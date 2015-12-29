<?php

/**
 * Created by PhpStorm.
 * User: jackson
 * Date: 29/12/2015
 * Time: 21:27
 */
class GuestBook
{
    private static $entries = [
        [
            'name' => 'Kirk',
            'message' => 'Hi, I\'m Kirk',
        ],
        [
            'name' => 'Jackson',
            'message' => 'Hi, I\'m Jackson',
        ]
    ];

    public function viewAll()
    {
        return self::$entries;
    }

    public function add($name, $message)
    {
        self::$entries[] = ['name' => $name, 'message' => $message];
        return true;
    }

    public function deleteAll()
    {
        self::$entries = [];
        return true;
    }
}