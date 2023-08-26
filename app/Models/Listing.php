<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 0,
                'title' => 'Portfolio one',
                'description' => 'A portfolio item'
            ],
            [
                'id' => 1,
                'title' => 'Portfolio two',
                'description' => 'A portfolio item that is much more than portfolio item 1'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();
        foreach($listings as $listing)
        {
            if($listing['id']==$id)
                return $listing;
        }
        
    }
}
