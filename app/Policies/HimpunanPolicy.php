<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Himpunan;
use Illuminate\Auth\Access\HandlesAuthorization;

class HimpunanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the himpunan can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the himpunan can view the model.
     */
    public function view(User $user, Himpunan $model): bool
    {
        return true;
    }

    /**
     * Determine whether the himpunan can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the himpunan can update the model.
     */
    public function update(User $user, Himpunan $model): bool
    {
        return true;
    }

    /**
     * Determine whether the himpunan can delete the model.
     */
    public function delete(User $user, Himpunan $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the himpunan can restore the model.
     */
    public function restore(User $user, Himpunan $model): bool
    {
        return false;
    }

    /**
     * Determine whether the himpunan can permanently delete the model.
     */
    public function forceDelete(User $user, Himpunan $model): bool
    {
        return false;
    }
}
