<div class="sidebar" data-color="default" data-active-color="success">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=" default | primary | info | success | warning | danger |"
  -->
    <div class="logo bg-white">
      <a href="#" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="{{asset('website/img/logo-mini.png')}}">
        </div>
        <!-- <p>CT</p> -->
      </a>
      <a href="#" class="simple-text logo-normal">
        {{-- H&M --}}
        <div class="logo-image-big" style="margin-right: 50%;">
          <img src="{{asset('website/img/logo.png')}}">
        </div> 
      </a>
    </div>
    <div class="sidebar-wrapper">
      <div class="user">
        <div class="photo">
          <img src="{{asset('theme/assets/img/faces/ayo-ogunseinde-2.jpg')}}" />
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" class="collapsed">
            <span>
              {{auth()->user()->name}}
              <b class="caret"></b>
            </span>
          </a>
          <div class="clearfix"></div>
          <div class="collapse" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="#">
                  <span class="sidebar-mini-icon">MP</span>
                  <span class="sidebar-normal">My Profile</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="sidebar-mini-icon">EP</span>
                  <span class="sidebar-normal">Edit Profile</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="sidebar-mini-icon">S</span>
                  <span class="sidebar-normal">Settings</span>
                </a>
              </li>
              <li>
                <a href="#"
               
                href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                >
                  <span class="sidebar-mini-icon">L</span>
                  <span class="sidebar-normal">Logout</span>
                </a>
              </li>
           

            </ul>
          </div>
        </div>
      </div>
      <ul class="nav">

        <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
          <a href="dashboard">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>Admin</p>
          </a>
        </li>

        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>Book Keeping</p>
          </a>
        </li>

        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>Sales</p>
          </a>
        </li>


        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>Payroll</p>
          </a>
        </li>

        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>Tax Management</p>
          </a>
        </li>


        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>Licensing</p>
          </a>
        </li>

        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>Billing</p>
          </a>
        </li>

        <li class="{{ (request()->is('dummy')) ? 'active' : '' }}">
          <a href="#">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>System</p>
          </a>
        </li>

        {{-- <li>
          <a data-toggle="collapse" href="#pagesExamples">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>
              Pages <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="pagesExamples">
            <ul class="nav">
              <li>
                <a href="../examples/pages/timeline.html">
                  <span class="sidebar-mini-icon">T</span>
                  <span class="sidebar-normal"> Timeline </span>
                </a>
              </li>
              <li>
                <a href="../examples/pages/login.html">
                  <span class="sidebar-mini-icon">L</span>
                  <span class="sidebar-normal"> Login </span>
                </a>
              </li>
              <li>
                <a href="../examples/pages/register.html">
                  <span class="sidebar-mini-icon">R</span>
                  <span class="sidebar-normal"> Register </span>
                </a>
              </li>
              <li>
                <a href="../examples/pages/lock.html">
                  <span class="sidebar-mini-icon">LS</span>
                  <span class="sidebar-normal"> Lock Screen </span>
                </a>
              </li>
              <li>
                <a href="../examples/pages/user.html">
                  <span class="sidebar-mini-icon">UP</span>
                  <span class="sidebar-normal"> User Profile </span>
                </a>
              </li>
            </ul>
          </div>
        </li> --}}
        
      </ul>
    </div>
  </div>


      {{-- logout form  --}}
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form> 