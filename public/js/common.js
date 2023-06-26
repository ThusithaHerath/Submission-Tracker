$(document).ready(function () {
  $(".multi-select-submission").select2({
    dropdownParent: $("#submission"),
    width: "resolve",
  });
  $(".single-select-submission").select2({
    dropdownParent: $("#submission"),
    maximumSelectionLength: 1,
    width: "resolve",
  });

  $(".js-example-basic-multiple").select2({
    dropdownParent: $("#editSubmissionModal"),
    width: "resolve",
  });

  $(".single-select-submissionEdit").select2({
    dropdownParent: $("#editSubmissionModal"),
    maximumSelectionLength: 1,
    width: "resolve",
  });

  $(".setting-multiple").select2({
    dropdownParent: $("#setting"),
    maximumSelectionLength: 1,
    width: "resolve",
  });

  $(".single-storyEdit").select2({
    maximumSelectionLength: 1,
    dropdownParent: $("#exampleModal"),
    width: "resolve",
  });

  $(".single-select-storyNew").select2({
    maximumSelectionLength: 1,
    dropdownParent: $("#storyModalNew"),
    width: "resolve",
  });

  $(".single-select").select2({
    maximumSelectionLength: 1,
    dropdownParent: $("#editPublisherModal"),
    width: "resolve",
  });
  $(".single-select-publishernew").select2({
    maximumSelectionLength: 1,
    dropdownParent: $("#PublisherModal"),
    width: "resolve",
  });
  //setting modal sortable section
  $("#sortable").sortable();

  // remove selected setting status
  $("#deleteSettingStatus").click(function () {
    $("input:checkbox").each(function () {
      var $this = $(this);

      if ($this.is(":checked")) {
        $(this).parent().parent().remove();
      }
    });
  });
});
