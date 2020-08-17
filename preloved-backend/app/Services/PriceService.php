<?php

namespace App\Services;

use App\Models\Product;

class PriceService
{
    public function getPrices()
    {
        $prices = [];

        foreach(Product::PRICES as $index => $name) {
            $prices[] = [
                'name' => $name,
                'products_count' => $this->getProductCount($index)
            ];
        }

        return $prices;
    }

    private function getProductCount($index)
    {
        return Product::withFilters()
        ->when($index == 0, function ($query) {
          $query->where('price', '<', '50000');
          })
          ->when($index == 1, function ($query) {
              $query->whereBetween('price', ['50000', '100000']);
          })
          ->when($index == 2, function ($query) {
              $query->whereBetween('price', ['100000', '500000']);
          })
          ->when($index == 3, function ($query) {
              $query->where('price', '>', '500000');
          })
        ->count();
    }
}