<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



<script>

function ref(i) {
    if (i == "updateRef7day") {
        updateRef7day();
    } else if (i == "updateReftoday") {
        updateReftoday();
    } else if (i == "updateRefyesterday") {
        updateRefyesterday();
    } else if (i == "updateRefweek") {
        updateRefweek();
    } else if (i == "updateRef30day") {
        updateRef30day();
    } else if (i == "updateRefmonth") {
        updateRefmonth();
    } else if (i == "updateRefyear") {
        updateRefyear();
    }
}

    $(document).ready(function() {
        $('#tableRef').DataTable({
            "order": [[ 1, "desc" ]],
            "ajax": "{{ route('api.referral') }}"
        });
    });

    function updateRefyesterday() {
        var datatable = $('#tableRef').DataTable();
        $.get("{{ route('api.referral.yesterday') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateReftoday() {
        var datatable = $('#tableRef').DataTable();
        $.get("{{ route('api.referral') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateRef7day() {
        var datatable = $('#tableRef').DataTable();
        $.get("{{ route('api.referral.7day') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateRefweek() {
        var datatable = $('#tableRef').DataTable();
        $.get("{{ route('api.referral.thisweek') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateRef30day() {
        var datatable = $('#tableRef').DataTable();
        $.get("{{ route('api.referral.30day') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateRefmonth() {
        var datatable = $('#tableRef').DataTable();
        $.get("{{ route('api.referral.thismonth') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateRefyear() {
        var datatable = $('#tableRef').DataTable();
        $.get("{{ route('api.referral.thisyear') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

</script>
