@extends('layouts.app')
@section('content')
    <section id="why-us" class="why-us pt-4">
        <div class="container p-0" data-aos="fade-up">

            <div class="section-title">
                <h2>Category</h2>
                <p style="letter-spacing: 1px">Submissions</p>
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
                                                <span class="p-3">Date Submitted</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Locked ?</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Story</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Publisher</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Status</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Notes</span>
                                            </div>
                                        </th>
                                        <th scope="col" class="p-0">
                                            <div class="d-flex justify-content-between ">
                                                <span class="p-3">Pay</span>
                                            </div>
                                        </th>
                                        <th scope="col"class="pb-3 pe-3"> <span>Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                               @foreach ($submission as $submission)
                               <tr scope="row " class="fs-6">
                                <td class="text-center data-1 delete-row">
                                    <a class="fa fa-trash" href="{{url('api/submission/delete/'.$submission->id)}}"></a>
                                </td>
                                <td class="data-dateSubmit">{{$submission->SubmissionDate}}</td>
                                <td class="data-locked">N/A</td>
                                <td class="data-story">{{$submission->story->StoryName}}</td>
                                <td class="data-publisher">{{$submission->publisher->Publisher}}</td>
                                <td class="data-status">{{$submission->SubmissionStatus->SubmissionStatusName}}</td>
                                <td class="data-notes">{{$submission->Notes}}</td>
                                <td class="data-pay">{{$submission->FeePaid}}</td>

                                            <td class="text-center editBtnSubmission data-7" data-bs-toggle="modal"
                                                data-bs-target="#editSubmissionModal">
                                                <i class="fa fa-pencil"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
    </section>
@endsection

@include('modal.submission', [
    'submission_status' => $submission_status,
    'submission' => $submission,
    'story' => $story,
    'publisher' => $publisher,
])
@include('modal.editSubmission', [
    'submission_status' => $submission_status,
    'submission' => $submission,
    'story' => $story,
    'publisher' => $publisher,
])
