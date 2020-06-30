<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Article extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        // In case you want specific fields
        // return [
        //     'id' => $this->id,
        //     'title' => $this->title,
        //     'body' => $this->body
        // ];
    }

    // Add if you want random stuff on a single article
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://github.com/eliashhtores')
        ];
    }
}
