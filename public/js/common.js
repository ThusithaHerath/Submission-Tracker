$(document).ready(function () {
  $(".js-example-basic-multiple").select2({
    dropdownParent: $("#submission"),
    width: "resolve",
  });
  $(".single-select").select2({
    maximumSelectionLength: 1,
    dropdownParent: $("#submission"),
    width: "resolve",
  });
});
