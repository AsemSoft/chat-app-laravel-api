<?php

namespace App\Http\Resources;

use App\Http\Resources\MessageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ConversationResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $data['id']=$this->id;
        $data['created_at']=$this->created_at;
        $data['messages']=MessageResource::collection($this->messages) ;
        return $data;
    }
}
