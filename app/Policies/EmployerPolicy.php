<?php

namespace App\Policies;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class EmployerPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin' || $user->role === 'employer';
    }

    public function view(User $user, Employer $employer): bool
    {
        return $user->role === 'admin' || $user->id === $employer->user_id;
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin' || $user->role === 'employer';
    }

    public function update(User $user, Employer $employer): bool
    {
        return $user->role === 'admin' || $user->id === $employer->user_id;
    }

    public function delete(User $user, Employer $employer): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Employer $employer): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Employer $employer): bool
    {
        return $user->role === 'admin';
    }
}
