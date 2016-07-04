<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hệ thống quản trị</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{$path}quan-tri/san-pham.html">Sản phẩm</a></li>
            <li><a href="{$path}quan-tri/tin-tuc.html">Tin tức</a></li>
            <li><a href="{$path}quan-tri/khach-hang.html">Khách hàng</a></li>
            <li><a href="{$path}quan-tri/nguoi-dung.html">Người dùng</a></li>
            <li><a href="{$path}quan-tri/nguoi-dung/dang-xuat.html">User:{$smarty.session.nguoi_dung['ten_nguoi_dung']}</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">  
                    
          </form>
          
        </div>
      </div>
    </nav>