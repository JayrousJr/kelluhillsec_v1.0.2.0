<?php

namespace App\Policies;

use App\Models\Result;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ResultPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->hasPermissionTo('view')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Result $result): bool
    {
        if ($user->hasPermissionTo('viewAny')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->hasPermissionTo('resultCreate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Result $result): bool
    {
        if ($user->hasPermissionTo('resultEdit')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Result $result): bool
    {
        if ($user->hasPermissionTo('resultManage')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Result $result): bool
    {
        if ($user->hasPermissionTo('resultManage')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Result $result): bool
    {
        if ($user->hasPermissionTo('resultManage')) {
            return true;
        }
        return false;
    }
}
