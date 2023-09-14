<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = [
    ["productName" => "Car Alarm Installation", "productPrice" => 15000],
    ["productName" => "Car Sound Set Up", "productPrice" => 12000],
    ["productName" => "Troubleshoot Sound System", "productPrice" => 8000],
    ["productName" => "Car Tinting", "productPrice" => 10000],
    ["productName" => "Car Check Ups", "productPrice" => 5000],
    ["productName" => "Car Alarm Malfunction Rescue", "productPrice" => 7000],
    ["productName" => "Car Head Light Installations", "productPrice" => 9000],
    ["productName" => "Car Stereo Installation", "productPrice" => 11000],
    ["productName" => "Troubleshoot Sound System", "productPrice" => 8000],
    ["productName" => "Car Alarm Installation", "productPrice" => 1232134],
    ["productName" => "Car Sound Set Up", "productPrice" => 123],
    ["productName" => "Troubleshoot Sound System", "productPrice" => 8000],
    ["productName" => "Car Tinting", "productPrice" => 3],
    ["productName" => "Car Check Ups", "productPrice" => 1],
    ["productName" => "Car Alarm Malfunction Rescue", "productPrice" => 12],
    ["productName" => "Car Head Light Installations", "productPrice" => 9000],
    ["productName" => "Car Stereo Installation", "productPrice" => 11000],
    ["productName" => "Troubleshoot Sound System", "productPrice" => 123213],
    ["productName" => "Car Alarm Installation", "productPrice" => 15000],
    ["productName" => "Car Sound Set Up", "productPrice" => 12000],
    ["productName" => "Troubleshoot Sound System", "productPrice" => 12345123],
    ["productName" => "Car Tinting", "productPrice" => 10000],
    ["productName" => "Car Check Ups", "productPrice" => 5000],
    ["productName" => "Car Alarm Malfunction Rescue", "productPrice" => 7000],
    ["productName" => "Car Head Light Installations", "productPrice" => 9000],
    ["productName" => "Car Stereo Installation", "productPrice" => 11000],
    ["productName" => "Troubleshoot Sound System", "productPrice" => 8000]
        ];

      // Set the number of items per page (e.g., 9 items per page)
    $perPage = 9;

    // Create a new collection from the services array
    $servicesCollection = new Collection($products);

    // Get the current page from the request query string
    $currentPage = Paginator::resolveCurrentPage();

    // Slice the collection to get the items for the current page
    $currentPageItems = $servicesCollection->slice(($currentPage - 1) * $perPage, $perPage);

    // Create a new LengthAwarePaginator instance
    $pagination = new LengthAwarePaginator($currentPageItems, $servicesCollection->count(), $perPage, $currentPage, [
        'path' => Paginator::resolveCurrentPath(),
    ]);

    // Use Paginator::useBootstrap() to apply Bootstrap styling to the pagination links
    Paginator::useBootstrap();

        return view('product', ['products' => $pagination]);
    }
}