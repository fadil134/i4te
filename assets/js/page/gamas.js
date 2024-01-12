/*

function showStopClock() {
  $(".stop-clock-section,#obst,#obsta").show();
}

function hideStopClock() {
  $(".stop-clock-section,#obst,#obsta").hide();
}

function showjust() {
  $(".just,#just").show();
}

function hidejust() {
  $(".just,#just").hide();
}

function addStopClock() {
  var newStopClockForm = $(".stop-clock-form:first").clone();

  newStopClockForm.find("input").val("");

  $("#obs").append(newStopClockForm);
}

$("#gmaps").on("change", function () {
  var gmapsUrl = $(this).val();

  // Mengekstrak latitude dan longitude dari URL Google Maps
  var coordinatesMatch = gmapsUrl.match(/@([-0-9.]+),([-0-9.]+)/);

  if (coordinatesMatch) {
    var latitude = coordinatesMatch[1];
    var longitude = coordinatesMatch[2];

    // Isi nilai ke dalam input fields
    $("#latitude").val(latitude);
    $("#longitude").val(longitude);

    iziToast.hide();
  } else {
    iziToast.error({
      title: "Error",
      message: "Invalid Google Maps URL. Please enter a valid URL.",
      position: "topRight",
      timeout: 5000,
    });
  }
});
*/

function showjust() {
  $(".just,#just").show();
}

function hidejust() {
  $(".just,#just").hide();
}

function showStopClock() {
  $(".stop-clock-form").show();
}

function hideStopClock() {
  $(".stop-clock-form").hide();
}

$("#addStopClock").on("click", function () {
  var newStopClockForm = $("#obst").clone().removeAttr("id").show();

  // Set the value of every input field to an empty string
  newStopClockForm.find("input, textarea").val("");

  $("#obst").after(newStopClockForm);
  updateAddButtonVisibility();
});

// Remove stop-clock-form
$(document).on("click", ".removeStopClock", function () {
  var formCount = $(".stop-clock-form").length;
  var currentIndex = $(this).index(".removeStopClock");

  if (formCount > 1 && currentIndex !== 0) {
    // If there is more than one form and it's not the first one, remove the closest form
    $(this).closest(".stop-clock-form").remove();
  } else {
    // If there is only one form or it's the first one, display a message or take appropriate action
    console.log("Cannot remove the first form");
  }
});

// Initial visibility setup
updateAddButtonVisibility();

function updateAddButtonVisibility() {
  $(".stop-clock-form").each(function (index) {
    if (index === 0) {
      $(this).find("#addStopClock").show();
    } else {
      $(this).find("#addStopClock").hide();
    }
  });
}

$("#gmaps").on("change", function () {
  var gmapsUrl = $(this).val();

  // Mengekstrak latitude dan longitude dari URL Google Maps
  var coordinatesMatch = gmapsUrl.match(/@([-0-9.]+),([-0-9.]+)/);

  if (coordinatesMatch) {
    var latitude = coordinatesMatch[1];
    var longitude = coordinatesMatch[2];

    // Isi nilai ke dalam input fields
    $("#latitude").val(latitude);
    $("#longitude").val(longitude);

    iziToast.hide();
  } else {
    iziToast.error({
      title: "Error",
      message: "Invalid Google Maps URL. Please enter a valid URL.",
      position: "topRight",
      timeout: 5000,
    });
  }
});
