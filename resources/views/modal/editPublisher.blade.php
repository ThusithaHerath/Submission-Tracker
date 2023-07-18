  <div class="modal fade" id="editPublisherModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content modalBody">
              <div class="modal-header border-0">
                  <h5 class="modal-title" id="exampleModalLabel">
                      <h2 style="letter-spacing: 2px;font-size: 40px;" class="fw-bold">Edit Publisher</h2>
                  </h5>
                  <button type="button" class="btn-close rounded-5" data-bs-dismiss="modal" aria-label="Close"
                      style="background-color: rgba(128, 128, 128, 0.575);font-size:12px"></button>
              </div>
              <div class="modal-body">
                  <!-- =======  modal Section ======= -->
                  <section id="testimonials" class="pb-0 pt-0 rounded-3 section-bg testimonials"
                      style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                      <div class="container" data-aos="fade-up">

                          <div class="testimonials-slider swiper mb-3" data-aos="fade-up" data-aos-delay="100">
                              <div class="d-flex row">
                                  <div class="col-12">

                                      <div class="testimonial-item p-4 rounded-3">

                                          <section id="book-a-table" class="book-a-table p-0">
                                              <div class="container" data-aos="fade-up">
                                                  <form action="{{ url('http://127.0.0.1:8000/api/publisher/update') }}"
                                                      method="POST" enctype="multipart/form-data" role="form"
                                                      class="php-email-form" data-aos="fade-up" data-aos-delay="100">

                                                      <input type="text" id="data_publisher__id" name="publisher_id"
                                                          hidden>
                                                      <div class="d-flex row">
                                                          <div class="form-group col-8">
                                                              <label for="" class="form-label">Publisher</label>
                                                              <input type="text" class="form-control"
                                                                  id="data_publisher" name="publisher_name">
                                                          </div>
                                                          <div class="form-group col-4">
                                                              <label for="" class="form-label">Type</label>
                                                              <select class="single-select" multiple id="data_type"
                                                                  style="width:200px!important" name="publisher_type">
                                                                  <option value="N/A">N/A</option>
                                                                  @foreach ($type as $type)
                                                                      <option value="{{ $type->id }}">
                                                                          {{ $type->PublisherTypeName }}</option>
                                                                  @endforeach
                                                              </select>

                                                          </div>


                                                      </div>
                                                      <div class="d-flex mb-3 row">
                                                          <div class="form-group col-3">
                                                              <label for="" class="form-label">Simultaneous
                                                                  Submission OK? <span class="text-danger">*</span>
                                                              </label>
                                                              <select class="single-select" multiple
                                                                  name="publisher_submission" id="data_submission"
                                                                  style="width:150px!important;">
                                                                  <option value="0">Unknown</option>
                                                                  <option value="1">Yes</option>
                                                                  <option value="2">No</option>
                                                                  <option value="3">Show All</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group col-3 mt-4">
                                                              <label for="" class="form-label">Rank</label>
                                                              <input type="number" class="form-control" id="data_rank"
                                                                  name="publisher_rank">
                                                          </div>
                                                          <div class="form-group col-3 mt-4">
                                                              <label for="" class="form-label">Deadline</label>
                                                              <input type="text" class="form-control"
                                                                  name="publisher_deadline" id="data_deadline">
                                                          </div>
                                                          <div class="form-group col-3 mt-4">
                                                              <label for="" class="form-label">Contact</label>
                                                              <input type="text" class="form-control"
                                                                  name="publisher_contact" id="data_contact"
                                                                  maxlength="16">
                                                          </div>

                                                      </div>
                                                      <span class="position-absolute">Mandotory Field <span
                                                              class="text-danger">*</span></span>
                                                      <div class="d-flex justify-content-end mt-4">
                                                          <div class="text-center"><button type="submit"
                                                                  class="bg-transparent border me-3"data-bs-dismiss="modal"
                                                                  onclick="event.preventDefault()">Cancel</button>
                                                          </div>
                                                          <div class="text-center"><button
                                                                  type="submit">Edit</button>
                                                          </div>
                                                      </div>

                                                  </form>
                                              </div>
                                          </section><!-- End Book A Table Section -->



                                      </div>
                                  </div>


                              </div>
                          </div>






                          </form>
                      </div>
                  </section><!-- End modal Section -->

              </div>

          </div>
      </div>
  </div>
