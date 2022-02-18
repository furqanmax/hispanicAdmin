<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return [
        //     'id' => $this->id,
        //     'topic_id'=> Topic::where('id', $this->topic_id)->value('title_en');
        //     'user_id'=> User::where('id',$this->user_id)->value('name'),
        //     'category_id'=> Category::where('id', $this->category_id)->value('title_en'),
            
            
        // ];

        return parent::toArray($request);

    }
}
