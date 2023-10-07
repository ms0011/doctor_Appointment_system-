<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_id', 'patient_name', 'appointment_date', 'reason'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
