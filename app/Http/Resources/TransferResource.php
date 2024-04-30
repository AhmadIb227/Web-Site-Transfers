<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
       //return parent::toArray($request);
       return [
            'Number' => $this->Number,
            'Sender'=> $this->Sender,
            'RecipientOffice' => $this->RecipientOffice,
            'SendOffice' => $this->SendOffice,
            'Receiver'=> $this->Receiver,
            'Value' => $this->Value,
            'Date' => $this->Date,
        ];
        
    }
    
}