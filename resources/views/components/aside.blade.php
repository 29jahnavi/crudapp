<aside class="sidebar-wrapper">
    <div class="logo-wrapper">
        <a href="{{url('/')}}" class="admin-logo">
            <img src="{{url('assets/images/logo.png')}}" alt="" class="sp_logo">
            <img src="{{url('assets/images/mini_logo.png')}}" alt="" class="sp_mini_logo">
        </a>
    </div>
    <div class="side-menu-wrap">
        <ul class="main-menu">
            <li>
                <a href="{{url('/')}}" class="active">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </span>
                    <span class="menu-text">
                        Dashboard
                    </span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </span>
                    <span class="menu-text">
                        Form
                    </span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('/form')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Basic Form
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('form2')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Basic Form 2
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/addpost')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Add Post
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/resize-image')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Resize Image
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('crop-image-upload')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Crop Image
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tablet"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                    </span>
                    <span class="menu-text">
                        Table
                    </span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('/list')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Data Table
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('form2/create')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Data Table 2
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/addpost-list')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Add Post List
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/imageUpload-list')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Crop Image List
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </span>
                    <span class="menu-text">
                        Category Management
                    </span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('/category')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Add Category
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/list-category')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                List Category
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </span>
                    <span class="menu-text">
                        Sub Category Management
                    </span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('/sub-category')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                Add Sub Category
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/sub-category/list')}}">
                            <span class="icon-dash">
                            </span>
                            <span class="menu-text">
                                List Sub Category
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>