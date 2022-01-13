<style>
    #quocgia {
        width: 100%;
        height: 500px;
    }

</style>
<div class="card collapsed-card  ">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-globe-asia mr-1"></i>
            QUỐC GIA
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
                <li>
                    <select class="form-control" onchange="country(value);">
                        <option value="country_updateCharttoday">Hôm nay</option>
                        <option value="country_updateChartyesterday">Hôm qua</option>
                        <option value="country_updateChart7day">7 Ngày qua</option>
                        <option value="country_updateChartweek">Tuần này</option>
                        <option value="country_updateChart30day">30 ngày qua</option>
                        <option value="country_updateChartmonth">Tháng này</option>
                    </select>
                </li>
                <button type="button" class="btn bg-info btn-sm ml-2" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <canvas id="quocgia">
        </canvas>
    </div>
</div>

@section('jsmap')
    @include('js_page.js_quocgia')
