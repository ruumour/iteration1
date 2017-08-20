<?php

namespace App;



class Post extends Model
{
	public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("title", "LIKE","%$keyword%");
            });
        }
        return $query;
    }
}
