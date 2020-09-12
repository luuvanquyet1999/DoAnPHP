<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('#comment_form').on('submit', function (event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "/doanphp/public/comment/add_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function (data) {
                    console.log(data)
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        $('#comment_post').val();
                        load_comment();
                    }
                }
            })
        });

        load_comment();

        function load_comment() {
            $.ajax({
                url: "/doanphp/public/comment/fetch_comment.php",
                method: "POST",
                success: function (data) {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function () {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });


    });
</script>