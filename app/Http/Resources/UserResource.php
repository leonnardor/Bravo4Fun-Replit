<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class UserResource extends JsonResource
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
            'id' => $this->USUARIO_ID,
            'name' => $this->USUARIO_NOME,
            'email' => $this->USUARIO_EMAIL,
        ];
        return parent::toArray($request);
    }
}
