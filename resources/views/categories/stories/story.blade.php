@extends('layouts.app')
@section('content')
    <div class="p-3" style="background-color: rgba(250, 235, 215, 0.363)">
        <div class="container p-0" data-aos="fade-up">

            <button type="button" class="btn btn-info mb-3"  data-bs-toggle="modal" data-bs-target="#story" >Add New Story</button>
            
            <div class="table-responsive overflow-hidden">

                <table class="table table-striped custom-table" id="custom-table">
                    <thead>
                        <tr>
                            <th scope="col"class="pb-3 text-center px-3">
                                <span>Delete</span>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Submitted ?</span>
                                    <nav id="navbar" class="navbar order-last  order-lg-0">
                                        <ul>
                                            <li class="dropdown "><a href="#"> <i class="bi bi-chevron-down"></i></a>
                                                <ul class="p-0">
                                                    <div class="px-2 filterSection p-4">

                                                        <span
                                                            style="letter-spacing: normal;   text-transform: capitalize!important;"
                                                            class="fs-6 fw-lighter">Sort
                                                            By</span>
                                                        <div class="d-flex mt-2 mb-3">
                                                            <button type="button"
                                                                class="btn btn-outline-primary me-3 Asc-btn">Asc</button>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary Des-btn">Des</button>
                                                        </div>
                                                        <span
                                                            style="letter-spacing: normal;   text-transform: capitalize!important;"
                                                            class="fs-6 fw-lighter">Filter
                                                            By</span>
                                                        <div class="d-flex mt-2">
                                                            <select class="filterOptions" multiple
                                                                data-placeholder="select here..." style="width: 240px">
                                                                <option value="All">All
                                                                </option>
                                                                <option value="AL">
                                                                    Alabama</option>
                                                                <option value="WY">
                                                                    Wyoming</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>


                                    </nav>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Status</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Type</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Lines</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Words</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Summary</span>
                                </div>
                            </th>
                            <th scope="col"class="pb-3 pe-3"> <span>Action</span></th>
                        </tr>
                    </thead>
                    <tr scope="row " class="fs-6">
                        <td class="text-center data-1 delete-row"> <i class="fa fa-trash"></i></td>
                        <td class="data-2">
                            1442
                        </td>
                        <td class="data-3"> James Yates</td>
                        <td class="data-4">
                            Web Designer
                            <small class="d-block">Far far away, behind the word
                                mountains</small>
                        </td>
                        <td class="data-5">+63 983 0962 971</td>
                        <td class="data-6">NY University</td>
                        <td class="data-6">NY University</td>
                        <td class="text-center editBtn data-7" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                                class="fa fa-pencil"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>

@endsection
