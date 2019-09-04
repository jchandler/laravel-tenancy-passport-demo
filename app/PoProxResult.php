<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class PoProxResult extends Model
{
    use UsesTenantConnection;
}
