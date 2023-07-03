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
                        <table class="table table-striped  " id="custom-table">
                            <thead>
                                <tr>
                                    <th scope="col"class="pb-3 text-center px-3">
                                        <span>Delete</span>
                                    </th>
                                    <th scope="col" class="p-0">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Publisher:</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Type:</span>
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
                                            <span class="p-3">Total Submissions</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Total Accepted</span>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-0">
                                        <div class="d-flex justify-content-between ">
                                            <span class="p-3">Total Earned</span>
                                        </div>
                                    </th>
                                    <th scope="col"class="pb-3 pe-3"> <span>Action</span></th>
                                </tr>
                            </thead>
                            @foreach ($publisher as $publisher)
                                <tr scope="row " class="fs-6">
                                    <td class="text-center data-1">
                                        <a class="fa fa-trash"
                                            href="{{ url('api/publisher/delete/' . $publisher->id) }}"></a>
                                        <input type="text" value="{{ $publisher->id }}" class="data_publisher__id"
                                            hidden>
                                    </td>
                                    <td class="data-publisher">{{ $publisher->Publisher }}</td>
                                    <td class="data-type">{{ $publisher->publisherType->PublisherType_Name }}</td>
                                    <td class="data-submission">
                                        @if ($publisher->SimultaneousSubmissionAllowed == '1')
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td class="data-rank">{{ $publisher->Rating }}</td>
                                    <td class="data-deadline">{{ $publisher->DeadlineDATE }}</td>
                                    <td class="data-contact">{{ $publisher->Contact }}</td>
                                    <td class="data-notes">{{ $publisher->Notes }}</td>
                                    <td class="data-totSubmission">N/A</td>
                                    <td class="data-totAccepted">N/A</td>
                                    <td class="data-totEarned">N/A</td>
                                    <td class="text-center editBtnPublisher data-7" data-bs-toggle="modal"
                                        data-bs-target="#editPublisherModal"> <i class="fa fa-pencil"></i>
                                    </td>
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
@include('modal.Publisher', ['publisher' => $publisher, 'type' => $type, 'rating' => $rating])
@include('modal.editPublisher', ['type' => $type, 'publisher' => $publisher, 'rating' => $rating])
