<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
  <div class="logo d-flex justify-content-between">
    <a href="index-2.html"><img src="{{URL::to('/assets/')}}/img/logo.png" alt=""></a>
    <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
    </div>
  </div>
  <ul id="sidebar_menu">
    <li class="mm-active">
      <a class="has-arrow"  href="#"  aria-expanded="false">
      <!-- <i class="fas fa-th"></i> -->
      <div class="icon_menu">
          <img src="{{URL::to('/assets/')}}/img/menu-icon/dashboard.svg" alt="">
      </div>
        <span>Dashboard</span>
      </a>
      <ul>
        <li><a class="active" href="index-2.html">Marketing</a></li>
        <li><a  href="index_2.html">Default</a></li>
        <li><a  href="index_3.html">Dark Menu</a></li>
      </ul>
    </li>
    <li class="">
        <a   class="has-arrow" href="#" aria-expanded="false">
          <div class="icon_menu">
              <img src="{{URL::to('/assets/')}}/img/menu-icon/2.svg" alt="">
          </div>
          <span>App</span>
        </a>
        <ul>
          <li><a href="calender.html">calender</a></li>
          <li><a href="editor.html">editor</a></li>
          <li><a href="mail_box.html">Mail Box</a></li>
          <li><a href="chat.html">Chat</a></li>
          <li><a href="faq.html">FAQ</a></li>
        </ul>
    </li>
  </ul>   
</nav>