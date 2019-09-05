<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PoProxResult extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'supplier_name' => $this->supplier_name,
            'buyer_name' => $this->buyer_name,
            'last_po_date' => $this->last_po_date,
            'avg_po_days' => $this->avg_po_days,
            'target_value' => $this->target_value
            ];
    }
}
