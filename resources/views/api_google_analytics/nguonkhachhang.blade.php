

<div class="card collapsed-card">
    <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-map-marker-alt mr-1"></i>
            NGUỒN TRUY CẬP
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
              <li>
                <select class="form-control" onchange="ref(value);">
                  <option value="updateReftoday">Hôm nay</option>
                  <option value="updateRefyesterday">Hôm qua</option>
                  <option value="updateRef7day">7 Ngày qua</option>
                  <option value="updateRefweek">Tuần này</option>
                  <option value="updateRef30day">30 ngày qua</option>
                  <option value="updateRefmonth">Tháng này</option>
                  <option value="updateRefyear">1 Năm </option>
              </select>
              </li>
                <button type="button" class="btn bg-info btn-sm ml-2" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </ul>
        </div>
    </div>
    <div class="card-body">
       
        <div style="width: 100%">
            <table id="tableRef" class="display" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Nguồn</th>
                        <th>Lượt Truy Cập</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nguồn</th>
                        <th>Lượt Truy Cập</th>

                    </tr>
                </tfoot>
            </table>
    
        </div>
       
    </div>
</div>

@section('jsmap')
@include('js_page.js_ref')
