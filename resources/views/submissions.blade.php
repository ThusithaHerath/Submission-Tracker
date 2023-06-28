@extends('layouts.app')
@section('content')
    <section id="why-us" class="why-us pt-4">
        <div class="container p-0" data-aos="fade-up">
            <div class="section-title">
                <p style="letter-spacing: 1px">Submission Totals</p>
            </div>
            <div class="table-responsive overflow-hidden">
                <div class="p-3" style="background-color: rgba(250, 235, 215, 0.363)">
                    <div class="container p-0" data-aos="fade-up">
                        <table class="table table-striped  " id="custom-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="p-0" style="width:200px">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Publisher</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0" style="width:200px">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Date</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0" style="background-color: #d9ba85;width:800px">
                                        <div class="d-flex justify-content-around">
                                            <span class="p-3">Stories & Lines & Words</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0" style="width:200px">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Total Lines</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0" style="width:200px">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Total Words</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($submissions as $i => $submission)
                                    <tr scope="row " class="fs-6">
                                        <td class="">{{ $submission->publisher->Publisher }}</td>
                                        <td class="">{{ $submission->SubmissionDate }}</td>
                                        <td class="" style="background-color: #d9ba85">
                                            <table class="table table-striped  overflow-auto" id="inner-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="p-0">
                                                            <div class="d-flex justify-content-between ">
                                                                <span class="p-3">#</span>
                                                            </div>
                                                        </th>

                                                        <th scope="col" class="p-0">
                                                            <div class="d-flex justify-content-between ">
                                                                <span class="p-3">Stories</span>
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
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $submission->story->Story_Name }}</td>
                                                    <td>{{ $submission->story->Lines }}</td>
                                                    <td>{{ $submission->story->Words }}</td>

                                                </tbody>
                                                <tfoot style="">
                                                    <tr>
                                                        <td class="fw-bold"
                                                            style="background-color: rgba(24, 24, 24, 0.84);color:gold">
                                                            Totals</td>
                                                        <td style="background-color: rgba(24, 24, 24, 0.84);color:gold">
                                                        </td>
                                                        <td style="background-color: rgba(24, 24, 24, 0.84);color:gold"
                                                            id="totalLines">
                                                        </td>
                                                        <td style="background-color: rgba(24, 24, 24, 0.84);color:gold"
                                                            id="totalWords">
                                                        </td>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </td>
                                        <td style="width: 200px;"><input type="text" id="totalLinesCopy"
                                                class="bg-transparent border-0 w-100">
                                        </td>
                                        <td style="width: 200px;"><input type="text" id="totalWordsCopy"
                                                class="bg-transparent border-0 w-100">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
    </section>
@endsection
