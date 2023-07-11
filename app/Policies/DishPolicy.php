<?php

namespace App\Policies;

use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DishPolicy
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
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Dish $dish)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user,Restaurant $restaurant)
    {
        if($user->can('Create own dish')){
            if($user->hasAnyRole(['restaurant-admin','restaurant-manager'])){
                return $user->workplace->id == $restaurant->id;
            }else if($user->hasRole('restaurant-super-admin')){
                return $user->restaurants->contains($restaurant);}
            
        }
        if($user->can('Create Dish')){
            return true;
        }
        return false;
    }

    public function edit(User $user, Dish $dish)
    {
        if($user->can('Edit own dish')){
            if($user->hasAnyRole(['restaurant-admin','restaurant-manager'])){
                return $user->workplace->id == $dish->restaurant->id;
            }else if($user->hasRole('restaurant-super-admin')){
                return $user->restaurants->contains($dish->restaurant);}
            
        }
        if($user->can('Edit Dish')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Dish $dish)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Dish $dish)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Dish $dish)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Dish $dish)
    {
        //
    }
}
