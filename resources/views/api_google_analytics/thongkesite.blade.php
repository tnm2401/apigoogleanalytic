
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />


<div class="card collapsed-card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-eye mr-1"></i>
            TRANG XEM NHIỀU
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
              <li>
                <select class="form-control" onchange="site(value);">
                  <option value="updateSitetoday">Hôm nay</option>
                  <option value="updateSiteyesterday">Hôm qua</option>
                  <option value="updateSite7day">7 Ngày qua</option>
                  <option value="updateSiteweek">Tuần này</option>
                  <option value="updateSite30day">30 ngày qua</option>
                  <option value="updateSitemonth">Tháng này</option>
                  <option value="updateSiteyear">1 Năm </option>
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
            <table id="tableID" class="display" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Tên Trang</th>
                        <th>Lượt Xem</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tên Trang</th>
                        <th>Lượt Xem</th>

                    </tr>
                </tfoot>
            </table>
    
        </div>
       
    </div>
</div>

@section('jsmap')
@include('js_page.js_site')
@endsection
