<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getTitleAttribute($value)
    {

        $ignore = ['a', 'and', 'at', 'but', 'for', 'in', 'the', 'to', 'with'];

        $title = explode(' ', $value);

        $modifiedTitle = [];

        foreach ($title as $word)
        {
            if (! in_array(strtolower($word), $ignore))
            {
                $modifiedTitle[] = ucfirst($word);
            } else {
                $modifiedTitle[] = strtolower($word);
            }
        }

        return join(' ', $modifiedTitle);
    }
}
