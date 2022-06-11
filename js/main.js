var url = {
  book: "This is booking",
};

function getData(page, data) {
  $(".loader").show();

  $.ajax({
    type: "POST",
    url: page,
    data: data,
    success: function (res) {
      // console.log(res);
      
      $("#root").html(`` + res);
      setTimeout(function(){
        $(".loader").hide();
      },100);
      $("#nav").load("js/nav.html");
    },
    // dataType: dataType,
  });
}

function checkURI(path) {
  path = path.split("#")[path.split("#").length - 1];
//   console.log("Path is " + path);
  switch (path) {
    case "/book":
      getData("book.php", "");
      break;
    case "/test":
      getData("test.php", "");
      break;
    case "/api":
      getData("api.php", "");
      break;
    default:
      getData("404.php", "");
      break;
  }
}

checkURI(window.location.href);
