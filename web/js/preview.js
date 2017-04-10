$("#preview").on("click".function() {
  $.post("preview.php", {data: $("#markdown_file").val(), md: $("#md").is(':checked')}, 
});