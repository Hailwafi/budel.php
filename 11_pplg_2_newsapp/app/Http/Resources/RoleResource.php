<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    public $status;
    public $message;
    /**
     * _construct
     * 
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resource
     * @return void
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transfrom the resource into an array.
     * 
     * @param \illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'success'    => $this->status,
            'message'    => $this->message,
            'data'       => $this->resource
        ];
    }
}
