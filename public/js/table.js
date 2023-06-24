$(document).ready(function () {
  $("#custom-table").dataTable({
    // aoColumnDefs: [
    //   { bSortable: false, aTargets: [5, 1, 2, 3, 4] },
    //   //   { bSearchable: false, aTargets: [0, 1, 2, 3, 4, 5] },
    // ],
  });

  $(".submision_table").dataTable({
    aoColumnDefs: [{ bSortable: false, aTargets: [0] }],

    fnDrawCallback: function () {
      $("input[type='search']").addClass("w-75");
    },
  });

  $(".filterOptions").select2({
    width: "resolve",
    allowClear: true,
    closeOnSelect: false,
  });

  var table = $("#custom-table").DataTable();

  $(".Asc-btn").on("click", function () {
    table.order([[1, "asc"]]).draw();
  });
  $(".Des-btn").on("click", function () {
    table.order([[1, "des"]]).draw();
  });

  // $(".fa-caret-down").click(function (ele) {
  //   $(".filterSection")
  //     .not($(ele).parent().parent().children(".filterSection"))
  //     .hide();
  // });

  $(".filterOptions").on("select2:select", function (e) {
    var data = e.params.data.text;
    if (data == "All") {
      $(".filterOptions").select2("destroy");
      $(".filterOptions").find("option").attr("selected", true);
      $(".filterOptions").select2({
        width: "resolve",
        allowClear: true,
        closeOnSelect: false,
      });
    }
  });

  // Find and remove selected table rows
  $(".delete-row").click(function () {
    // $("table tbody").find('input[name="record"]').each(function() {
    //     if ($(this).is(":checked")) {
    $(this).parents("tr").remove();
    // }
  });
});
