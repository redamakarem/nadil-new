<?php

namespace App\Policies;

use App\Models\DiningTable;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiningTablePolicy
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
     * @param  \App\Models\DiningTable  $diningTable
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, DiningTable $diningTable)
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
        if($user->can('Create own table')){
            return true;
        }
        if($user->can('Create table')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiningTable  $diningTable
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, DiningTable $diningTable)
    {
        //
    }
    public function edit(User $user, DiningTable $diningTable)
    {
        if($user->can('Edit own table')){
            if($user->hasAnyRole(['restaurant-admin','restaurant-manager'])){
                return $user->workplace->id == $diningTable->restaurant->id;
            }else if($user->hasRole('restaurant-super-admin')){
                return $user->restaurants->contains($diningTable->restaurant);}
        }
        if($user->can('Edit table')){
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiningTable  $diningTable
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, DiningTable $diningTable)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiningTable  $diningTable
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, DiningTable $diningTable)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiningTable  $diningTable
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, DiningTable $diningTable)
    {
        //
    }
}
