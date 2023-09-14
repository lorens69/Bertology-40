@extends('layouts.layout')

@section('title', 'Product')

@section('content')

@include('partials._header')
<style>
    .pagination>li>a,
    .pagination>li>span {
        padding: 6px 12px;
        text-decoration: none;
        border: 1px solid #ddd;
        color: #333;
        border-radius: 3px;
        background-color: #FFE6C7;
        /* Add the background color for pagination items */
    }

    .pagination .page-item {
        margin: 0px 5px;
    }

    .pagination .page-item:not(.active) .page-link {
        border: none;
    }

    .pagination>.active>a,
    .pagination>.active>span {
        color: black;
        border-color: #FF6000;
    }

    .page-link.active,
    .active>.page-link {
        background-color: #FFE6C7;
        /* Add the background color for pagination items */
        color: black;
    }

    /* Hide the "Next" and "Previous" links */
    .pagination .disabled,
    .pagination .page-link[rel="next"],
    .pagination .page-link[rel="prev"] {
        display: none;
    }

    .card {
        border: 2px solid black;
    }

    .accordion-button {
        border: 1px solid #FF6000;
        font-size: larger;
        color: black;
    }

    .accordion-body {
        background-color: #FFE6C7;
    }

    .accordion-body label {
        font-weight: bolder;
        font-size: large;
        margin-left: 10px;
    }

    .accordion-body input {
        border: 1px solid black;
        margin-left: 15px;
    }

    .form-check {
        display: flex;
        align-items: center;
    }

    .form-check * {
        margin: 15px;
    }
    .service-card .card{
        border: 1px solid #FF6000;
    }
</style>
<div class="container-fluid mt-5" style="width:90%;">
    <h1 class="text-start text-uppercase" name="title">Car Accessories</h1>
    <label for="title" style="width: 120px;border-bottom: solid 3px #FFA559;"></label>

    <div class="container-fluid w-100 d-flex justify-content-end mt-2">
        <input type="text" class="w-25" style="border:1px solid #FF6000">
        <button class="btn btn-sm text-uppercase text-white"
            style="background-color:#FF6000;padding:10px;width: 20%;border-radius: 0;">Search Service</button>
    </div>
    <div class="d-flex w-100 justify-content-between ">
        <div class="accordion mt-5 me-5 w-25" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Category
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category" id="securitySafety"
                                    value="Security and Safety">
                                <label class="form-check-label" for="securitySafety">
                                    Security and Safety
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="audioEntertainment" value="Audio and Entertainment">
                                <label class="form-check-label" for="audioEntertainment">
                                    Audio and Entertainment
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Exterior Enhancements
                                </label>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="accordion-item ">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Sort By
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category" id="securitySafety"
                                    value="Security and Safety">
                                <label class="form-check-label" for="securitySafety">
                                    Alphabetically
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="audioEntertainment" value="Audio and Entertainment">
                                <label class="form-check-label" for="audioEntertainment">
                                    Price (Low to High)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Price (High to Low)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Recently Added </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Best Sellers </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-card card d-flex flex-row  mt-5 justify-content-center flex-wrap  w-75 row ">
            @foreach($products as $product)
            <div class="card col-lg-3 m-4 p-0">
                <div class="card-body d-flex justify-content-center align-items-center  flex-column pt-0 ps-0 pe-0 ">
                    <img src="./img/ShineMasters.png" width="100%" height="100%" alt=""
                        style="background-color: black;display: inline-block;max-width: fit-content;">
                    <br>
                    <h5 class="card-title ">{{ $product['productName'] }}</h5>
                    <p class="card-text">Price: Php {{ number_format($product['productPrice']) }}</p>

                    <button class="btn w-75 text-white p-3 fw-bold m-2" style="background-color: #FF6000;">BOOK
                        APPOINTMENT</button>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="d-flex align-items-center ">
        <span style="display: inline-block; border-bottom:2px solid #FFA559;width:85%"> </span>
        <div class="d-inline-flex justify-content-end mt-4">
            {{ $products->links() }}
        </div>
    </div>

</div> <br><br>
@include('partials._footer')
@endsection