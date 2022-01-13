<style>
  #thietbi {
      width: 100%;
      height: 500px;
  }
</style>
<div class="card collapsed-card ">
  <div class="card-header">
      <h3 class="card-title">
          <i class="fas fa-tablet-alt mr-1"></i>
          THIẾT BỊ
      </h3>
      <div class="card-tools">
          <ul class="nav nav-pills ml-auto">
             <li>
              <select class="form-control" onchange="device(value);">
                <option value="updateDevicetoday">Hôm nay</option>
                <option value="updateDeviceyesterday">Hôm qua</option>
                <option value="updateDevice7day">7 Ngày qua</option>
                <option value="updateDeviceweek">Tuần này</option>
                <option value="updateDevice30day">30 ngày qua</option>
                <option value="updateDevicemonth">Tháng này</option>
                <option value="updateDeviceyear">1 Năm </option>
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
      <canvas id="thietbi">
      </canvas>
  </div>
</div>
@section('jsmap')
  @include('js_page.js_thietbi')


