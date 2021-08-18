<ul class="sidebar-menu" data-widget="tree">

  <br><hr>
        <li class="header"><h5><b>MANAGMENT</b></h5></li>
        
           
        <li {{ request()->is('users.index') ? 'class=active' : ''}}><a href="{{ route('users.index') }}"><i class="fa fa-users"></i>USERS</a></li> 

        <li {{ request()->is('products.index') ? 'class=active' : ''}}><a href="{{ route('products.index') }}"><i class="fa fa-bookmark"></i>PRODUCTS</a></li>
        <li><a href="#"><i class="fa fa-stock"></i>STOCK</a></li>
        <li><a href="#"><i class="fa fa-order"></i>ORDERS</a></li>
        <li><a href="#"><i class="fa fa-class"></i>CATEGORIES</a></li>
        <li><a href="#"><i class="fa fa-eye"></i>ANALYTICS</a></li>

        <br><hr>
          
          
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fa fa-sign-out">
            </i> <span>Salir</span>
          </a>         
   
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
  </ul>
    