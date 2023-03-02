@extends('layouts.app')
@section('content')
    <div class="p-3" style="background-color: rgba(250, 235, 215, 0.363)">



        <div class="container p-0" data-aos="fade-up">

            <div class="table-responsive overflow-hidden">

                <table class="table table-striped custom-table" id="custom-table">
                    <thead>
                        <tr>
                            <th scope="col"class="pb-3 text-center px-3">
                                <span>Delete</span>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Header 1</span>


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
                                    <span class="p-3">Header 2</span>



                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Header 3</span>



                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Header 4</span>



                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Header 5</span>



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
                        <td class="text-center editBtn data-7" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                                class="fa fa-pencil"></i>
                        </td>
                    </tr>

                    <tr scope="row " class="fs-6">
                        <td class="text-center data-1 delete-row"> <i class="fa fa-trash"></i></td>
                        <td class="data-2">
                            1392
                        </td>
                        <td class="data-3"> James Yates</td>
                        <td class="data-4">
                            Web Designer
                            <small class="d-block">Far far away, behind the word
                                mountains</small>
                        </td>
                        <td class="data-5">+63 983 0962 971</td>
                        <td class="data-6">NY University</td>
                        <td class="text-center editBtn data-7" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                                class="fa fa-pencil"></i>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="data-2">
                        <input type="text" id="data-3">
                        <input type="text" id="data-4">
                        <input type="text" id="data-5">
                        <input type="text" id="data-6">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
