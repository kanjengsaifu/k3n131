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
<style>
    .text-color{
        color: #751f21;
    }
    .text_center{
        text-align: center !important;
    }
    .penting{
        width: 100% !important;
    }
    .scrl{
        overflow: hidden;
        overflow-x: hidden;
        overflow-y: scroll;
        width:auto;
        height:290px;
    }
    #disabled {
        pointer-events: none;
        cursor: default;
        opacity: 0.5;
        filter: alpha(opacity=50);
    }
    .dis {
        pointer-events: none;
        cursor: default;
        opacity: 0.5;
        filter: alpha(opacity=50);
    }
    .text-bold{
        font-weight: bold;
    }
    .render{
        color: rgb(95, 190, 170); font-size: 12px
    }

</style>

