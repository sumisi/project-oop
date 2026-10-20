<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    public function reports(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }
}
