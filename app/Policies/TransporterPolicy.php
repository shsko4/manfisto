<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Manfisto;
use App\Models\Transporter;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransporterPolicy
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
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Transporter $transporter)
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
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Transporter $transporter)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Transporter $transporter)
    {
        $manfisto = Manfisto::where('transporter_id',$transporter->id)->first();

        if($manfisto){
            return false;
        }

        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Transporter $transporter)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Transporter $transporter)
    {
        //
    }
}
