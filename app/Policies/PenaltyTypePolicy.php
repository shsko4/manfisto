<?php

namespace App\Policies;

use App\Models\Penalty;
use App\Models\PenaltyType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PenaltyTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PenaltyType $penaltyType)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PenaltyType $penaltyType)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PenaltyType $penaltyType)
    {
        $penalty = Penalty::where('penalty_type_id',$penaltyType->id)->get();
        if($penalty->count() > 0){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PenaltyType $penaltyType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PenaltyType $penaltyType)
    {
        //
    }
}
