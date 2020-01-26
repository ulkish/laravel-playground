<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    /**
     * Allows Laravel to create slugs based on title using the
     * Sluggable class
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Getter used to beautify the style of a title.
     *
     * @param string $value
     * @return string
     */
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
