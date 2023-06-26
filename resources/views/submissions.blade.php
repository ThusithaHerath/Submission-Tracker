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
                                    <th scope="col" class="p-0">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Publisher:</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Date:</span>
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
                            @foreach ($submissions as $submission)
                            <tr scope="row " class="fs-6">
                                <td class="">{{$submission->publisher->Publisher}}</td>
                                <td class="">{{$submission->SubmissionDate}}</td>
                                <td class="">{{$submission->story->Story_Name}}</td>
                                <td class="">{{$submission->story->Lines}}</td>
                                <td class="">{{$submission->story->Words}}</td>
                            </tr>
                            
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    </tbody>
                    </table>

                </div>
            </div>
    </section>
@endsection
