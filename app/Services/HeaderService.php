<?php
namespace App\Services;

use App\Models\Category;

class HeaderService
{
    public function getItems()
    {

        $categories = Category::whereNotIn('id',[8,9,10])->get();
        return $categories;
    }
}