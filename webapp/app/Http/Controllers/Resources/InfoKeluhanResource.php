<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InfoKeluhanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user_id' =>$this->user_id,
            'opd_id' => $this->opd_id,
            'category_id' => $this->category_id,
            'subject' => $this->subject,
            'slug' => $this->slug,
            'body' => $this->body,
        ];
    }
}
