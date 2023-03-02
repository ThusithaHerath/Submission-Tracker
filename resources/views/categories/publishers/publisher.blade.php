@extends('layouts.app')
@section('content')
    <section id="why-us" class="why-us pt-4">
        <div class="container p-0" data-aos="fade-up">

            <div class="section-title">
                <h2>Category</h2>
                <p style="letter-spacing: 1px">Publishers</p>
            </div>
            <div class="table-responsive overflow-hidden">
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
                                                <span class="p-3">Publisher</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Type</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Submission ?</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Rank</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Deadline</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Contact</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Notes</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Total Submis.</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Total Accepted</span>
                                            </div>
                                        </th>
                                        <th scope="col"class="pb-3 pe-3"> <span>Action</span></th>
                                    </tr>
                                </thead>
                                <tr scope="row " class="fs-6">
                                    <td class="text-center data-1 delete-row"> <i class="fa fa-trash"></i></td>
                                    <td class="data-publisher">N/A</td>
                                    <td class="data-type">N/A</td>
                                    <td class="data-submission">Unknown</td>
                                    <td class="data-rank">0</td>
                                    <td class="data-deadline">N/A</td>
                                    <td class="data-contact">N/A</td>
                                    <td class="data-notes">N/A</td>
                                    <td class="data-totalSub">N/A</td>
                                    <td class="data-totalAcc">N/A</td>

                                    <td class="text-center editBtnPublisher data-7" data-bs-toggle="modal"
                                        data-bs-target="#editPublisherModal">
                                        <i class="fa fa-pencil"></i>
                                    </td>
                                </tr>



                                </tbody>
                            </table>

                        </div>
                    </div>
    </section>
@endsection
