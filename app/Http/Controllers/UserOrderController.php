<?php

namespace App\Http\Controllers;

use App\Interfaces\UserOrderRepositoryInterface;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    private UserOrderRepositoryInterface $userOrderRepository;


    public function __construct(UserOrderRepositoryInterface $userOrderRepository)
    {
        $this->userOrderRepository = $userOrderRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $userOrders = $this->userOrderRepository->getAllUserOrders();
        return response()->json(['status' => 'success', 'data' => $userOrders]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $userOrder = $this->userOrderRepository->getUserOrderById($id);
        return $userOrder ? response()->json(['status' => 'success', 'data' => $userOrder]) : response()->json(['status' => 'error', 'message' => 'Specified resource could not be found']);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $deleted = $this->userOrderRepository->deleteUserOrder($id);
        return $deleted ? response()->json(['status' => 'success', 'Specified resource deleted successfully']) : response()->json(['status' => 'error', 'message' => 'Failed to delete specified resource']);
        //
    }
}
