<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 09.06.2019
     * Time: 2:35
     */

    namespace App\Widgets;

    use App\Widgets\Contract\ContractWidget;
    use App\Models\Admin\Widgets\RecentlyAddedProdWidget;

    class RecentlyAddedProductsWidget implements ContractWidget
    {
        public function execute()
        {
            $data = RecentlyAddedProdWidget::all();
            return view('Widgets::recently', [
                'data' => $data
            ]);
        }
    }
