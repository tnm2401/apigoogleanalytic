<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



<script>

function site(i) {
    if (i == "updateSite7day") {
        updateSite7day();
    } else if (i == "updateSitetoday") {
        updateSitetoday();
    } else if (i == "updateSiteyesterday") {
        updateSiteyesterday();
    } else if (i == "updateSiteweek") {
        updateSiteweek();
    } else if (i == "updateSite30day") {
        updateSite30day();
    } else if (i == "updateSitemonth") {
        updateSitemonth();
    } else if (i == "updateSiteyear") {
        updateSiteyear();
    }
}

    $(document).ready(function() {
        $('#tableID').DataTable({
            "order": [[ 1, "desc" ]],
            "ajax": "{{ route('api.pageview') }}"
        });
    });

    function updateSiteyesterday() {
        var datatable = $('#tableID').DataTable();
        $.get("{{ route('api.pageview.yesterday') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateSitetoday() {
        var datatable = $('#tableID').DataTable();
        $.get("{{ route('api.pageview') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateSite7day() {
        var datatable = $('#tableID').DataTable();
        $.get("{{ route('api.pageview.7day') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateSiteweek() {
        var datatable = $('#tableID').DataTable();
        $.get("{{ route('api.pageview.thisweek') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateSite30day() {
        var datatable = $('#tableID').DataTable();
        $.get("{{ route('api.pageview.30day') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateSitemonth() {
        var datatable = $('#tableID').DataTable();
        $.get("{{ route('api.pageview.thismonth') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

    function updateSiteyear() {
        var datatable = $('#tableID').DataTable();
        $.get("{{ route('api.pageview.thisyear') }}", function(newDataArray) {
            datatable.clear();
            datatable.rows.add(newDataArray.data);
            datatable.draw();
        });
    };

</script>
