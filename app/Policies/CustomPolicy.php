<?php

namespace App\Policies;

use App\Models\Custom;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomPolicy
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
     * @param  \App\Models\Custom  $custom
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Custom $custom)
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
     * @param  \App\Models\Custom  $custom
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Custom $custom)
    {
        return $custom->recipt_no == null && $custom->total_tax_amount > 0;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Custom  $custom
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Custom $custom)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Custom  $custom
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Custom $custom)
    {
        //
    }

    public function add_cert(User $user, Custom $custom)
    {
        return $custom->recipt_no == null;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Custom  $custom
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Custom $custom)
    {
        //
    }
}
