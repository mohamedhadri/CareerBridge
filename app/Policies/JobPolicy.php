<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin' || $user->role === 'employer';
    }

    public function view(User $user, Job $job): bool
    {
        return $user->role === 'admin' || $job->employer->user_id === $user->id;
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin' || $user->role === 'employer';
    }

    public function update(User $user, Job $job): bool
    {
        return $user->role === 'admin' || $job->employer->user_id === $user->id;
    }

    public function delete(User $user, Job $job): bool
    {
        return $user->role === 'admin' || $job->employer->user_id === $user->id;
    }

    public function restore(User $user, Job $job): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Job $job): bool
    {
        return $user->role === 'admin';
    }
}
