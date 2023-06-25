<!-- Modal -->
<div class="modal fade" id="setting" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content modalBody">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">
                    <h2 style="letter-spacing: 2px;font-size: 35px;" class="fw-bold">Change Settings</h2>
                </h5>
                <button type="button" class="btn-close rounded-5" data-bs-dismiss="modal" aria-label="Close"
                    style="background-color: rgba(128, 128, 128, 0.575);font-size:12px"></button>
            </div>
            <div class="modal-body">
                <!-- =======  modal Section ======= -->
                <section id="testimonials" class="testimonials section-bg pb-0">
                    <div class="container" data-aos="fade-up">

                        <div class="testimonials-slider swiper mb-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="  row">
                                <div class="col-12">
                                    <div class="section-title mb-4 p-0 mt-1">
                                        <h2>Add New Item</h2>
                                    </div>
                                    <div class="testimonial-item p-4 rounded-3" style="background-color: #26231d">

                                        <section id="book-a-table" class="book-a-table p-0">
                                            <div class="container" data-aos="fade-up">
                                                <form action="{{ url('http://127.0.0.1:8000/api/settings/addField') }}"
                                                method="POST" enctype="multipart/form-data" role="form" data-aos="fade-up" data-aos-delay="100" >
                                                    @csrf
                                                    <div class="d-flex">
                                                        <div class="form-group me-3">
                                                            <label for="" class="form-label">Field To
                                                                Modify</label><br>
                                                            <select class="setting-multiple" multiple
                                                                style="width:230px!important" name="mfield">
                                                                <option value="1">Story Status</option>
                                                                <option value="2">Story type</option>
                                                                <option value="3">Publisher type</option>
                                                                <option value="4">Submission status</option>
                                                            </select>

                                                        </div>
                                                        <div class="form-group me-3 p-0">
                                                            <label for="" class="form-label">Input New</label>
                                                            <input type="text" name="field_value" class="form-control"
                                                                id="Story">
                                                        </div>
                                                        <div class="mt-2 text-center w-25"><button class="mt-4 w-100"
                                                                type="submit">Save</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </section>



                                    </div>
                                </div>

                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="section-title mb-4 p-0 mt-1">
                                        <h2>Delete Status Or Reorder</h2>
                                    </div>
                                    <div class="testimonial-item p-4 rounded-3" style="background-color: #26231d">

                                        <section id="book-a-table" class="book-a-table p-0">
                                            <div class="container" data-aos="fade-up">
                                                <form action=" " role="form" class="php-email-form"
                                                    data-aos="fade-up" data-aos-delay="100">

                                                    <div class="d-flex">
                                                        <div class="p-0 w-100">
                                                            <p class="m-0 p-0">To reorder, 1) Select Status. 2) Drag and
                                                                Drop Selected Status</p>

                                                            <ul id="sortable" class="ui-sortable mt-3">
                                                                <li class="ui-state-default ui-sortable-handle d-flex">
                                                                    <span
                                                                        class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                                                    <th scope="row">
                                                                        <label class="control control--checkbox me-5">
                                                                            <input type="checkbox" name="" />
                                                                            <div
                                                                                class="control__indicator settingStatus">
                                                                            </div>
                                                                        </label>
                                                                    </th>
                                                                    Item 1

                                                                </li>
                                                                <li class="ui-state-default ui-sortable-handle d-flex">
                                                                    <span
                                                                        class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                                                    <th scope="row">
                                                                        <label class="control control--checkbox me-5">
                                                                            <input type="checkbox" name="" />
                                                                            <div
                                                                                class="control__indicator settingStatus">
                                                                            </div>
                                                                        </label>
                                                                    </th>Item
                                                                    2
                                                                </li>
                                                                <li class="ui-state-default ui-sortable-handle d-flex">
                                                                    <span
                                                                        class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                                                    <th scope="row">
                                                                        <label class="control control--checkbox me-5">
                                                                            <input type="checkbox" name="" />
                                                                            <div
                                                                                class="control__indicator settingStatus">
                                                                            </div>
                                                                        </label>
                                                                    </th>Item
                                                                    3
                                                                </li>
                                                                <li class="ui-state-default ui-sortable-handle d-flex">
                                                                    <span
                                                                        class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                                                    <th scope="row">
                                                                        <label class="control control--checkbox me-5">
                                                                            <input type="checkbox" name="" />
                                                                            <div
                                                                                class="control__indicator settingStatus">
                                                                            </div>
                                                                        </label>
                                                                    </th>Item
                                                                    4
                                                                </li>
                                                                <li class="ui-state-default ui-sortable-handle d-flex">
                                                                    <span
                                                                        class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                                                    <th scope="row">
                                                                        <label class="control control--checkbox me-5">
                                                                            <input type="checkbox" name="" />
                                                                            <div
                                                                                class="control__indicator settingStatus">
                                                                            </div>
                                                                        </label>
                                                                    </th>Item
                                                                    5
                                                                </li>


                                                            </ul>
                                                        </div>
                                                        <div class="w-50">
                                                            <div class=" position-absolute"
                                                                style="margin-top: 130px;margin-left: -50px;">

                                                                <div class="text-center"><button type="submit"
                                                                        id="deleteSettingStatus"
                                                                        style="background-color: rgba(235, 37, 77, 0.733)">Delete
                                                                        Status</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="float-end">

                                                        <div class="text-center"><button type="submit"
                                                                data-bs-dismiss="modal">Exit
                                                                Settings</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </section><!-- End Book A Table Section -->



                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </section><!-- End modal Section -->

            </div>

        </div>
    </div>
</div>
<style>
    #sortable {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 60%;
        /* overflow: scroll; */
        min-height: 200px;
    }

    #sortable li {
        margin: 0 3px 3px 3px;
        padding: 10px;
        padding-left: 1.5em;
        font-size: 17px;
        background-color: rgba(0, 0, 0, 0.719);
        border: 1px solid #d3af71;
        cursor: pointer;

    }

    #sortable li span {
        position: absolute;
        margin-left: -1.3em;
    }
</style>
