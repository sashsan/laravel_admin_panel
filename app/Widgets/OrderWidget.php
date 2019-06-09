<?php

    namespace App\Widgets;

    use App\Widgets\Contract\ContractWidget;
    use App\Models\Admin\Widgets\AdminOrderWidget;

    class OrderWidget implements ContractWidget
    {
        public function execute()
        {
            $data = AdminOrderWidget::all();
            return view('Widgets::order', [
                'data' => $data
            ]);
        }
    }
