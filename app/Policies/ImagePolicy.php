<?php

namespace App\Policies;

use App\Models\Image;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ImagePolicy
{
    /**
     * Determine whether the admin can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the admin can view the model.
     */
    public function view(User $user, Image $image): bool
    {
        //
    }

    /**
     * Determine whether the admin can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the admin can update the model.
     */
    public function update(User $user, Image $image): bool
    {
        //
    }

    /**
     * Determine whether the admin can delete the model.
     */
    public function delete(User $user, Image $image): bool
    {
        //
    }

    /**
     * Determine whether the admin can restore the model.
     */
    public function restore(User $user, Image $image): bool
    {
        //
    }

    /**
     * Determine whether the admin can permanently delete the model.
     */
    public function forceDelete(User $user, Image $image): bool
    {
        //
    }
}
