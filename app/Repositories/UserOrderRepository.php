<?php

namespace App\Repositories;

use App\Interfaces\UserOrderRepositoryInterface;
use App\Models\UserOrder;

class UserOrderRepository implements UserOrderRepositoryInterface
{
    public function getAllUserOrders()
    {
        return UserOrder::all();
    }

    public function getUserOrderById($userOrderId)
    {
        return UserOrder::find($userOrderId);
    }

    public function deleteUserOrder($userOrderId)
    {
        return UserOrder::destroy($userOrderId);
    }

}
