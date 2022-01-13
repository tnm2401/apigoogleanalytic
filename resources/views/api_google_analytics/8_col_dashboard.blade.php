<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sign-in-alt"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">PHIÊN TRUY CẬP</span>
                <span id="dashboard_session" class="info-box-number">
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">KHÁCH</span>
                <span id="dashboard_visitors" class="info-box-number">
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">KHÁCH MỚI</span>
                <span id="dashboard_new_visitors" class="info-box-number">
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-orange elevation-1"><i class="fas fa-eye"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">LƯỢT XEM TRANG</span>
                <span id="dashboard_pageviews" class="info-box-number">
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-sign-out-alt"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">TỈ LỆ THOÁT</span>
                <span id="dashboard_exit_rate" class="info-box-number">
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-bolt"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">PHIÊN MỚI</span>
                <span id="dashboard_new_sessions" class="info-box-number">
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-maroon elevation-1"><i class="fas fa-clock"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">THỜI GIAN XEM TB</span>
                <span id="dashboard_avg_time" class="info-box-number">
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-lime elevation-1"><i class="fas fa-user-clock"></i>
           </span>
            <div class="info-box-content">
                <span class="info-box-text">TRANG/PHIÊN</span>
                <span id="dashboard_page_per_session" class="info-box-number">
                </span>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
@section('jsmap')
    @include('js_page.js_dashboard')
