      <div class="modal fade" id="storyModalNew" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content modalBody">
                  <div class="modal-header border-0">
                      <h5 class="modal-title" id="exampleModalLabel">
                          <h2 style="letter-spacing: 2px;font-size: 40px;" class="fw-bold">Story</h2>
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
                                                      <form action="{{ url('http://127.0.0.1:8000/api/story/store') }}"
                                                          method="POST" enctype="multipart/form-data" role="form"
                                                          class="php-email-form" data-aos="fade-up"
                                                          data-aos-delay="100">
                                                          @csrf
                                                          <div class="form-group mb-3">
                                                              <label for="" class="form-label">Story</label>
                                                              <input type="text" class="form-control" name="story">
                                                          </div>

                                                          <div class="d-flex">
                                                              <div class="form-group me-5">
                                                                  <label for=""
                                                                      class="form-label">Status</label>
                                                                  <select class="single-select-storyNew" multiple
                                                                      name="status" style="width:150px!important">
                                                                      <option value="N/A">N/A</option>
                                                                      @foreach ($story_status as $status)
                                                                          <option
                                                                              value="{{ $status->StoryCompletionStatus_ID }}">
                                                                              {{ $status->StoryCompletionStatus_Name }}
                                                                          </option>
                                                                      @endforeach
                                                                  </select>
                                                              </div>
                                                              <div class="form-group me-2 p-0">
                                                                  <label for="" class="form-label">Type</label>
                                                                  <select class="single-select-storyNew" multiple
                                                                      name="type" style="width:150px!important">
                                                                      <option value="N/A">N/A</option>
                                                                      @foreach ($story_type as $type)
                                                                          <option value="{{ $type->StoryType_ID }}">
                                                                              {{ $type->StoryType_Name }}</option>
                                                                      @endforeach
                                                                  </select>

                                                              </div>


                                                          </div>
                                                          <div class="d-flex mb-3">
                                                              <div class="form-group me-5">
                                                                  <label for="" class="form-label">Lines</label>
                                                                  <input type="number" name="lines"
                                                                      class="form-control"style="width:150px!important">
                                                              </div>
                                                              <div class="form-group me-2 p-0">
                                                                  <label for="" class="form-label">Words</label>
                                                                  <input type="number" name="words"
                                                                      class="form-control"style="width:150px!important">
                                                              </div>


                                                          </div>
                                                          <div class="form-group  mb-4">
                                                              <label for="" class="form-label">Summary</label>
                                                              <textarea class="form-control" name="summary" rows="5" placeholder="Type here..."></textarea>

                                                          </div>
                                                          <div class="d-flex justify-content-end mt-3">
                                                              <div class="text-center"><button type="submit"
                                                                      onclick="event.preventDefault()"
                                                                      class="bg-transparent border me-3"data-bs-dismiss="modal">Cancel</button>
                                                              </div>
                                                              <button type="submit">Save</button>
                                                          </div>

                                                      </form>
                                                  </div>
                                              </section>



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
