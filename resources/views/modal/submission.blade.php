<!-- Modal -->
<div class="modal fade" id="submission" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modalBody">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">
                    <h2 style="letter-spacing: 2px;font-size: 40px;" class="fw-bold">Submission</h2>
                </h5>
                <button type="button" class="btn-close rounded-5" data-bs-dismiss="modal" aria-label="Close"
                    style="background-color: rgba(128, 128, 128, 0.575);font-size:12px"></button>
            </div>
            <div class="modal-body">

                <section id="testimonials" class="testimonials section-bg pb-0">
                    <form action="{{ url('http://127.0.0.1:8000/api/submission/store') }}"method="POST"
                        enctype="multipart/form-data" role="form" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="100">
                        @csrf
                        <div class="container" data-aos="fade-up">

                            <div class="d-flex justify-content-around section-title p-1"
                                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <p>Submission</p>
                            </div>


                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="table-responsive custom-table-responsive p-4">

                                            <table class="table custom-table submision_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            #
                                                        </th>
                                                        <th scope="col">Story</th>
                                                        <th scope="col">Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($story as $story)
                                                        <tr scope="row">
                                                            <th scope="row">
                                                                <label class="control control--radio">
                                                                    <input type="radio"
                                                                        name="story"value="{{ $story->id }}" />
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </th>
                                                            <td>{{ $story->Story_Name }}</td>
                                                            <td>{{ $story->StoryType_ID }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive custom-table-responsive">

                                            <table class="table custom-table submision_table" id="submision_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            #
                                                        </th>
                                                        <th scope="col">Publisher</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Sim. Sub.</th>
                                                        <th scope="col">Rank</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($publisher as $publisher)
                                                        <tr scope="row">
                                                            <th scope="row">
                                                                <label class="control control--radio">
                                                                    <input type="radio" name="publisher"
                                                                        value="{{ $publisher->id }}" />
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </th>
                                                            <td>{{ $publisher->Publisher }}</td>
                                                            <td>{{ $publisher->publisher_type_id }}</td>
                                                            <td>{{ $publisher->SimultaneousSubmissionAllowed }}</td>
                                                            <td>{{ $publisher->Rating }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <section id="book-a-table" class="book-a-table">
                                <div class="container" data-aos="fade-up">
                                    <div class="row php-email-form">
                                        <div class="col-lg-2 col-md-2 form-group">
                                            <label for="" class="form-label">Submission Status</label>
                                            <select class="single-select-submission" multiple
                                                style="width:150px!important;" name="status" required>
                                                @foreach ($submission_status as $status)
                                                    <option value="{{ $status->id }}">
                                                        {{ $status->SubmissionStatus_Name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-lg-2 col-md-2 form-group mt-3 mt-md-0">
                                            <label for="" class="form-label">Submission</label>
                                            <input type="date" class="form-control" name="submission" placeholder=""
                                                name="submission_date" required>

                                        </div>
                                        <div class="col-lg-2 col-md-2 form-group ">
                                            <label for="" class="form-label">Pay</label>
                                            <input type="number" name="pay" class="form-control" placeholder="Pay"
                                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>

                                            <input type="number" name="user" value="{{Auth::User()->id}}"
                                             hidden>
                                        </div>

                                        <div class="col-6">

                                            <div class="form-group  ">
                                                <label for="" class="form-label">Note</label>
                                                <textarea class="form-control" name="note" rows="5" placeholder="Type here..."></textarea>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <div class="text-center"data-bs-dismiss="modal"><button type="submit"
                                                    onclick="event.preventDefault()"
                                                    class="bg-transparent border me-3">Cancel</button></div>
                                            <div class="text-center"><button type="submit">Save</button></div>
                                        </div>
                                    </div>


                                </div>
                            </section>


                        </div>
                    </form>
                </section><!-- End modal Section -->

            </div>

        </div>
    </div>
</div>
