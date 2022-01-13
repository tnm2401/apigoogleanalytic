<style>
    #truycap {
        width: 100%;
        height: 500px;
    }

</style>
<div class="card collapsed-card ">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-chart-line mr-1"></i>
            LƯỢT TRUY CẬP
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
                <li>
                    <select class="form-control" onchange="access(value);">
                        <option value="access_updateCharttoday">Hôm nay</option>
                        <option value="access_updateChartyesterday">Hôm qua</option>
                        <option value="access_updateChart7day">7 Ngày qua</option>
                        <option value="access_updateChartweek">Tuần này</option>
                        <option value="access_updateChart30day">30 ngày qua</option>
                        <option value="access_updateChartmonth">Tháng này</option>
                        <option value="access_updateChartyear">1 Năm </option>
                    </select>
                </li>
                <button type="button" class="btn bg-info btn-sm ml-2"
                data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            </ul>
        </div>
    </div>
    <div class="card-body">

       

        <canvas id="truycap">
        </canvas>
    </div>
</div>
@section('jsmap')
    @include('js_page.js_truycap')
