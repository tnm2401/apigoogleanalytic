<style>
    #trinhduyet {
        width: 100%;
        height: 500px;
    }
</style>
<div class="card collapsed-card  ">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fab fa-chrome mr-1"></i>
            TRÌNH DUYỆT
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
               <li>
                <select class="form-control" onchange="browser(value);">
                    <option value="updateCharttoday">Hôm nay</option>
                    <option value="updateChartyesterday">Hôm qua</option>
                    <option value="updateChart7day">7 Ngày qua</option>
                    <option value="updateChartweek">Tuần này</option>
                    <option value="updateChart30day">30 ngày qua</option>
                    <option value="updateChartmonth">Tháng này</option>
                    <option value="updateChartyear">1 Năm </option>
                </select>
               </li>
           
                <button  type="button" class="btn bg-info btn-sm ml-2"
                    data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <canvas id="trinhduyet">
        </canvas>
    </div>
</div>
@section('jsmap')
    @include('js_page.js_trinhduyet')


