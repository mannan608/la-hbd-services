<?php

namespace App\Models;

use App\Models\Profile\Address;
use App\Models\Profile\AcademicInformation;
use App\Models\Profile\ImmigrationRefusal;
use App\Models\Profile\StudentDocument;
use App\Models\Profile\StudyPlan;
use App\Models\Profile\WorkExperience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'student_number',
        'profile_step',

        // Student Information
        'date_of_birth',
        'gender',
        'nationality',
        'place_of_birth',
        'marital_status',

        // Passport Information
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth'        => 'date',
            'passport_issue_date'  => 'date',
            'passport_expiry_date' => 'date',
            'profile_step'         => 'integer',
        ];
    }

    // ── Relationships ────────────────────────────────────────────────────────

    public function user()
    {
        return $this->belongsTo(User::class);
    }

   

    // ── Helpers ──────────────────────────────────────────────────────────────

    /**
     * Advance profile_step if the completed step is the current highest.
     */
    public function advanceStepTo(int $completedStep): void
    {
        if ($completedStep >= $this->profile_step) {
            $next = min($completedStep + 1, 6);
            $this->update(['profile_step' => $next]);
        }
    }
}