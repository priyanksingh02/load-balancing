
$(document).ready(function () {
    $("#result-box").hide();
    $.post("init.php",
        function (data) {
            // alert( "Data Loaded: " + data );
            if (typeof (Storage) !== "undefined") {
                sessionStorage.operations = data;
                load_options($("input[name='mode']:checked").val());
            } else {
                $("#result").text("Sorry, your browser does not support web storage...Some Functionality will fail");
            }
        });
    $("button").click(function () {
        args = {};
        args["num1"] = $("#input1").val();
        args["num2"] = $("#input2").val();
        args["oper"] = $("#operation").val();
        args["type"] = $("input[name='mode']:checked").val();
        $.post(
            "compute.php",
            args,
            function (data, status) {
                //alert("Data: " + data + "\nStatus: " + status);
                $("#result").html(data);
            }
        );
        $("#result-box").show();
    });
    $('input[type=radio][name=mode]').change(function () {
        load_options(this.value);
    });
    $("#operation").change(function () {
        var sel = $(this).children("option:selected").attr('inp');
        if (sel == 1) {
            $("#input2grp").hide();
            $("#inputlabel").text("Input");
        } else {
            $("#input2grp").show();
            $("#inputlabel").text("Input A");
        }
    });
});

function load_options(option) {
    var arr = JSON.parse(sessionStorage.operations)[option];
    var $dropdown = $('#operation');
    $dropdown.children().remove().end().append('<option value="nop" inp="2" selected>Select Any Operation</option>');
    $.each(arr, function () {
        // alert(this.des);
        $dropdown.append($('<option />').val(this.code).text(this.des).attr('inp', this.in));
    });
}