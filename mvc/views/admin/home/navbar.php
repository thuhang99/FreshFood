    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-fish"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Fresh Food</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      
      
      <?php
                $arr = array(
                    'Admin' => array(
                        'name' => 'Trang chủ',
                        'icon' => 'sun'
                    ),
                    'Category' => array(
                        'name' => 'Danh mục',
                        'icon' => 'seedling'
                    ),
                    'Product' => array(
                        'name' => 'Sản phẩm',
                        'icon' => 'carrot'
                    ),
                    'BlogAD' => array(
                        'name' => 'Bài viết',
                        'icon' => 'leaf'
                    ),
                    'Order' => array(
                      'name' => 'Đơn hàng',
                      'icon' => 'cart-plus'
                    ),
                    'Customer' => array(
                      'name' => 'Khách hàng',
                      'icon' => 'cat'
                    )
                    
                );
                // mảng $key => $value

                // Lấy $url để xét với vòng lặp phía dưới
                $url = explode('/', $_GET['url']);

                $url_active='';

                if( isset($url[0]) ){
                    $url_active = $url[0];
                }
            ?>

            <?php foreach($arr as $key => $value){ 
                
                // Kiểm tra active
                if( $key == $url_active ){
                    $active = 'active';
                }else{
                    $active = '';
                }
                
            ?>

            <li class="nav-item ">
                <a href="<?php echo URL.$key; ?>" class="nav-link <?php echo $active; ?>">
                    <i class="nav-icon fas fa-<?php echo $value['icon']; ?>"></i>
                    <span>
                    <?php echo $value['name']; ?>
                    </span>
                </a>
            </li>

            <?php } ?>



      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>