<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $resp = $this->collection;
        
        for ($i = 0; $i < count($resp); $i++) {
            $resp[$i]['imagePath'] = env('APP_STORAGE') . $resp[$i]['imagePath'];
        }

        return $resp;
    }
}
