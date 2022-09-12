<?php

namespace App\Interfaces;

interface UserOrderRepositoryInterface
{
    public function getAllUserOrders();
    public function getUserOrderById($userOrderId);
    public function deleteUserOrder($userOrderId);
}
