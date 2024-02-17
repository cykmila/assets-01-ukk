<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="logo d-flex justify-content-center">
            <img src="{{ asset('img/logo-libyline.png') }}" alt="Logo" style="width: 30%">
        </div>
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">

                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"
                            style="color: rgba(157, 18, 77, 1)"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item {{ $active == 'dashboard' ? 'active' : ''}}">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->role == 'admin')
                <li class="sidebar-item {{ $active == 'category/admin' ? 'active' : ''}} ">
                    <a href="/category/admin" class='sidebar-link'>
                        <i class="bi bi-tag-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Category</span>
                    </a>
                </li>   
                @else 
                <li class="sidebar-item {{ $active == 'category' ? 'active' : ''}} ">
                    <a href="/category" class='sidebar-link'>
                        <i class="bi bi-tag-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Category</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == 'admin')
                <li class="sidebar-item {{ $active == 'book/admin' ? 'active' : ''}} ">
                    <a href="/book/admin" class='sidebar-link'>
                        <i class="bi bi-book-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Book</span>
                    </a>
                </li>
                @else 
                <li class="sidebar-item {{ $active == 'book' ? 'active' : ''}} ">
                    <a href="/book" class='sidebar-link'>
                        <i class="bi bi-book-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Book</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == 'user')
                <li class="sidebar-item {{ $active == 'bookmark' ? 'active' : ''}}">
                    <a href="/bookmark" class='sidebar-link'>
                        <i class="bi bi-bookmark-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Bookmark</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->role == 'admin')
                <li class="sidebar-item {{ $active == 'borrowing/admin' ? 'active' : ''}}">
                    <a href="/borrowing/admin" class='sidebar-link'>
                        <i class="bi bi-bag-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Borrowing</span>
                    </a>
                </li> 
                @else
                <li class="sidebar-item {{ $active == 'borrowing' ? 'active' : ''}}">
                    <a href="/borrowing" class='sidebar-link'>
                        <i class="bi bi-bag-fill" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Borrowing</span>
                    </a>
                </li>
                @endif
                <li class="sidebar-item {{ $active == 'logout' ? 'active' : ''}} ">
                    <a href="/logout" class='sidebar-link'>
                        <i class="bi bi-box-arrow-left" style="color: rgb(140, 21, 60)"></i>
                        <span style="color: rgb(140, 21, 60)">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
