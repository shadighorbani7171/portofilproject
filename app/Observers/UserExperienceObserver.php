<?php

namespace App\Observers;

use App\Models\UserExperience;

class UserExperienceObserver
{
    /**
     * Handle the UserExperience "created" event.
     */
    public function creating(UserExperience $userExperience): void
    {
       $userExperience->user_id = auth()->user()->id;
    }
    public function created(UserExperience $userExperience): void
    {
        //
    }

    /**
     * Handle the UserExperience "updated" event.
     */
    public function updated(UserExperience $userExperience): void
    {
        //
    }

    /**
     * Handle the UserExperience "deleted" event.
     */
    public function deleted(UserExperience $userExperience): void
    {
        //
    }

    /**
     * Handle the UserExperience "restored" event.
     */
    public function restored(UserExperience $userExperience): void
    {
        //
    }

    /**
     * Handle the UserExperience "force deleted" event.
     */
    public function forceDeleted(UserExperience $userExperience): void
    {
        //
    }
}
