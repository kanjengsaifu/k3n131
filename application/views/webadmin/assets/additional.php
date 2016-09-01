<script type="text/javascript">
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    $(document).ready(function ($) {
        $("input[name='inpcek']").click(function () {
            if ($(this).is(':checked')) {
                var remove = '';
                $('input.tcal:text').attr('value', remove);
                $('input.tcal:text').attr("disabled", true);
            } else if ($(this).not(':checked')) {
                $('input.tcal:text').attr("disabled", false);
            }
        });
    });
</script>

