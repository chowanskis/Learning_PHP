<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
$(function() {
  $('input:first', '#form').on('input', function() {
    var msg = $(this).val();
    $('button:first', '#form').attr("disabled", (msg.length > 0) ? false : true); 
  });
});
</script>