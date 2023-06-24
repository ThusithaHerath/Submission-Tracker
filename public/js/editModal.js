// ON SELECTING ROW
$(".editBtn").click(function () {
  //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
  var data_story = $(this).parents("tr").find(".data-story").text();
  var data_status = $(this).parents("tr").find(".data-status").text();
  var data_type = $(this).parents("tr").find(".data-type").text();
  var data_lines = $(this).parents("tr").find(".data-lines").text();
  var data_words = $(this).parents("tr").find(".data-words").text();
  var data_summary = $(this).parents("tr").find(".data-summary").text();
  // CREATING DATA TO SHOW ON MODEL
  $("#data_story").val(data_story);
  $("#data_status").val(data_status).trigger("change");
  $("#data__type").val(data_type).trigger("change");
  $("#data_lines").val(data_lines);
  $("#data_words").val(data_words);
  $("#data_summary").val(data_summary);
});

// ON SELECTING ROW
$(".editBtnPublisher").click(function () {
  //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
  var data_publisher = $(this).parents("tr").find(".data-publisher").text();
  var data_type = $(this).parents("tr").find(".data-type").text();
  var data_submission = $(this).parents("tr").find(".data-submission").text();
  var data_rank = $(this).parents("tr").find(".data-rank").text();
  var data_deadline = $(this).parents("tr").find(".data-deadline").text();
  var data_contact = $(this).parents("tr").find(".data-contact").text();

  // CREATING DATA TO SHOW ON MODEL
  $("#data_publisher").val(data_publisher);
  $("#data_type").val(data_type).trigger("change");
  $("#data_submission").val(data_submission).trigger("change");
  $("#data_rank").val(data_rank);
  $("#data_deadline").val(data_deadline);
  $("#data_contact").val(data_contact);
});

$(".editBtnSubmission").click(function () {
  //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
  var data_status = $(this).parents("tr").find(".data-status").text();
  var data_dateSubmit = $(this).parents("tr").find(".data-dateSubmit").text();
  var data_pay = $(this).parents("tr").find(".data-pay").text();
  var data_notes = $(this).parents("tr").find(".data-notes").text();

  // CREATING DATA TO SHOW ON MODEL
  $("#data___status").val(data_status).trigger("change");
  $("#data___dateSubmit").val(data_dateSubmit);
  $("#data___pay").val(data_pay);
  $("#data___notes").val(data_notes);
});
