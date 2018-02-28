<?php

namespace App\Policies;

use App\User;
use App\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Product $product)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Product $product)
    {
        //
    }

    public function delete(User $user, Product $product)
    {
        return $user->id === $product->user_id;
    }
}
