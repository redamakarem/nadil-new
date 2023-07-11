<?php

namespace App\Policies;

use App\Models\DishesMenu;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DishesMenuPolicy
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
     * @param  \App\Models\DishesMenu  $dishesMenu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, DishesMenu $dishesMenu)
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
        if($user->can('Create own menu')){
            return true;
        }
           if($user->can('Create Menu')){
               return true;
           }
           return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DishesMenu  $dishesMenu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, DishesMenu $dishesMenu)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DishesMenu  $dishesMenu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function edit(User $user, DishesMenu $dishesMenu)
    {
        if($user->can('Edit own menu')){
            if($user->hasAnyRole(['restaurant-admin','restaurant-manager'])){
                return $user->workplace->id == $dishesMenu->restaurant->id;
            }else if($user->hasRole('restaurant-super-admin')){
                return $user->restaurants->contains($dishesMenu->restaurant);}
        }
           if($user->can('Edit Menu')){
               return true;
           }
           return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DishesMenu  $dishesMenu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, DishesMenu $dishesMenu)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DishesMenu  $dishesMenu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, DishesMenu $dishesMenu)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DishesMenu  $dishesMenu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, DishesMenu $dishesMenu)
    {
        //
    }
}
