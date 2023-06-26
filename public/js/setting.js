$(document).ready(function () {
  $("#fieldToModify").on("select2:select", function () {
    var fieldValue = $("#fieldToModify").val();

    $.post(
      "http://127.0.0.1:8000/api/settings/getFieldData/",
      { fieldValue: fieldValue },
      function (data, status) {
        console.log(data);
        if (status == "success") {
          $("#sortable").empty();
          if (fieldValue == 1) {
            $(data).each(function (index, obj) {
              $("#sortable").append(
                '<li class="ui-state-default ui-sortable-handle d-flex"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span> <th scope="row"> <label class="control control--checkbox me-5"> <input type="checkbox" name="storyStatus" value="' +
                  obj.id +
                  '"/> <div class="control__indicator settingStatus"> </div> </label>  </th>' +
                  obj.StoryCompletionStatus_Name +
                  "</li>"
              );
            });
          } else if (fieldValue == 2) {
            $(data).each(function (index, obj) {
              $("#sortable").append(
                '<li class="ui-state-default ui-sortable-handle d-flex"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span> <th scope="row"> <label class="control control--checkbox me-5"> <input type="checkbox" name="storyType" value="' +
                  obj.id +
                  '"/> <div class="control__indicator settingStatus"> </div> </label>  </th>' +
                  obj.StoryType_Name +
                  "</li>"
              );
            });
          } else if (fieldValue == 3) {
            $(data).each(function (index, obj) {
              $("#sortable").append(
                '<li class="ui-state-default ui-sortable-handle d-flex"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span> <th scope="row"> <label class="control control--checkbox me-5"> <input type="checkbox" name="publisherType" value="' +
                  obj.id +
                  '"/> <div class="control__indicator settingStatus"> </div> </label>  </th>' +
                  obj.PublisherType_Name +
                  "</li>"
              );
            });
          } else if (fieldValue == 4) {
            $(data).each(function (index, obj) {
              $("#sortable").append(
                '<li class="ui-state-default ui-sortable-handle d-flex"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span> <th scope="row"> <label class="control control--checkbox me-5"> <input type="checkbox" name="submissionStatus" value="' +
                  obj.id +
                  '"/> <div class="control__indicator settingStatus"> </div> </label>  </th>' +
                  obj.SubmissionStatus_Name +
                  "</li>"
              );
            });
          }
          $("#sortable").show("slow");
        }
      }
    );
  });
});

function deleteFieldData(params) {
  event.preventDefault();

  var fieldValue = $("#fieldToModify").val();
  var selectedItemIDs = $("#sortable input:checkbox:checked");
  if (fieldValue == "" || selectedItemIDs == []) {
    selectedItemIDs
      .map(function () {
        return $(this).val();
      })
      .get();
    console.log(selectedItemIDs);
    $.post(
      "http://127.0.0.1:8000/api/settings/deleteFieldData/",
      { fieldValue: fieldValue, selectedItemIDs: selectedItemIDs },
      function (data, status) {
        console.log(data);
      }
    );
  } else {
    alert("Please select a field to delete from the database and try again!!");
  }
}
