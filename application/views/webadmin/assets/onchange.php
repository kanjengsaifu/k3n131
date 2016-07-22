<script type="text/javascript">
    $('#inp_kelas').change(function() {
        var kelas = $('#inp_kelas option:selected').val();
        $.ajax({
            url: "<?php echo base_url(); ?>master/siswa/pupolate_kelas",
            data: {kelas: kelas},
            type: "POST",
            dataType: "json",
            success: function(data) {
                $("#table-absen").html(data[0]);
            }
        });
    });

    $('#inp_pembayaran').change(function() {
        var pembayaran = $('#inp_pembayaran option:selected').text();

        if (pembayaran == 'SPP') {
            $("#div-bulan").show();
            $("#div-tahun").show();
        }else{
            $("#div-bulan").hide();
            $("#div-tahun").hide();
        }
    });

</script>