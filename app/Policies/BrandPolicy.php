<?php

namespace App\Policies;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BrandPolicy
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
    public function view(User $user, Brand $brand): bool
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
    public function update(User $user, Brand $brand): bool
    {
        //
    }

    /**
     * Determine whether the admin can delete the model.
     */
    public function delete(User $user, Brand $brand): bool
    {
        //
    }

    /**
     * Determine whether the admin can restore the model.
     */
    public function restore(User $user, Brand $brand): bool
    {
        //
    }

    /**
     * Determine whether the admin can permanently delete the model.
     */
    public function forceDelete(User $user, Brand $brand): bool
    {
        //
    }
}
