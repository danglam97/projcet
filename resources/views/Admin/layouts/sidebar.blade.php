<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('quan-tri.admin') }}">
                    <i class="fa fa-calendar"></i> <span>Bảng Điều Khiển</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.category.index')}}">
                    <i class="fa fa-folder-open-o"></i> QL Danh Mục
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.banner.index')}}">
                    <i class="fa fa-photo"></i> QL Banner
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.product.index')}}">
                    <i class=" fa fa-database"></i> QL Sản Phẩm
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.vendor.index')}}">
                    <i class="fa fa-align-justify"></i> QL Nhà Cung Cấp
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.brand.index')}}">
                    <i class="fa fa-id-card"></i> QL Thương Hiệu
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.order.index')}}">
                    <i class="fa fa-cart-plus"></i> QL Đơn Hàng
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.article.index')}}">
                    <i class="fa  fa-newspaper-o"></i> QL Tin Tức
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.Contact.index')}}">
                    <i class="fa fa-compress"></i> QL Liên Hệ
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-user"></i> QL USER
                </a>
            </li>
            <li class="">
                <a href="{{route('quan-tri.setting.index')}}">
                    <i class="fa fa-gear"></i> Setting
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
