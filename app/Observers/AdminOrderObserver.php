<?php

namespace App\Observers;

use App\Models\Admin\Order;
use Carbon\Carbon;

class AdminOrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Models\Admin\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        //
    }

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Models\Admin\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        //
    }

    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Models\Admin\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Models\Admin\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Models\Admin\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }

    public function saving(Order $order)
    {
        $this->setPublishedAt($order);
        //return false;
    }

    public function setPublishedAt(Order $order)
    {
        $needSetPublished = empty($order->updated_at) || !empty($order->updated_at);

        if ($needSetPublished){
            $order->updated_at = Carbon::now();
        }
    }




}
