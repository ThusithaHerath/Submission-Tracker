$(document).ready(function () {
  $(".js-example-basic-multiple").select2({
    dropdownParent: $("#submission"),
    width: "resolve",
  });
  $(".setting-multiple").select2({
    dropdownParent: $("#setting"),
    width: "resolve",
  });
  $(".single-select").select2({
    maximumSelectionLength: 1,
    dropdownParent: $("#submission"),
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
