<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferencePoint extends Model
{
    use HasFactory;

    public static function getReferencePoints()
    {
        $referencePoints = ReferencePoint::where('is_deleted', false)
            ->orderBy('display_order', 'asc')
            ->get();

        return $referencePoints;
    }

    public static function getReferencePoint($reference_point_id)
    {
        $referencePoint = ReferencePoint::find($reference_point_id);
        return $referencePoint;
    }
}
