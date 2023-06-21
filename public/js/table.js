$(document).ready(function () {
  $("#custom-table").dataTable({
    aoColumnDefs: [
      { bSortable: false, aTargets: [5, 1, 2, 3, 4] },
      //   { bSearchable: false, aTargets: [0, 1, 2, 3, 4, 5] },
    ],
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

  // ON SELECTING ROW
  $(".editBtn").click(function () {
    //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
    var data2 = $(this).parents("tr").find(".data-2").text();
    var data3 = $(this).parents("tr").find(".data-3").text();
    var data4 = $(this).parents("tr").find(".data-4").text();
    var data5 = $(this).parents("tr").find(".data-5").text();
    var data6 = $(this).parents("tr").find(".data-6").text();
    // CREATING DATA TO SHOW ON MODEL

    $("#data-2").val(data2);
    $("#data-3").val(data3);
    $("#data-4").val(data4);
    $("#data-5").val(data5);
    $("#data-6").val(data6);
  });

  // Find and remove selected table rows
  $(".delete-row").click(function () {
    // $("table tbody").find('input[name="record"]').each(function() {
    //     if ($(this).is(":checked")) {
    $(this).parents("tr").remove();
    // }
  });
});
