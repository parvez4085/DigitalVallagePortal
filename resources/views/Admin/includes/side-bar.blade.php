<!-- Sidebar -->
<style>
    .bg-gradient-color {
        background-color: #f35b04;
    }
</style>
<ul class="navbar-nav bg-gradient-color sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/dashboard')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Nauniya</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage Family(परिवार)</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('admin/#')}}">Mukhiya(मुखिया)</a>
                <a class="collapse-item" href="{{url('admin/#')}}">Members(सदस्य)</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseofficer" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage Officer(अधिकारी)</span>
        </a>
        <div id="collapseofficer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('admin/dm')}}">DM(ज़िला अधिकारी)</a>
                <a class="collapse-item" href="{{url('admin/lekhpal')}}">Lekhpal(लेखपाल)</a>
                <a class="collapse-item" href="{{url('admin/secretary')}}">Secretary(ग्राम सचिव)</a>
                <a class="collapse-item" href="{{url('admin/formerhelper')}}">Former Helper(किसान सहायक)</a>
                <a class="collapse-item" href="{{url('admin/kotedar')}}">Kotedar(कोटेदार)</a>
                <a class="collapse-item" href="{{url('admin/ves')}}">VES(ग्राम रोजगार सेवक)</a>
                <a class="collapse-item" href="{{url('admin/blo')}}">BLO(बूथ स्तर अधिकारी)</a>
                <a class="collapse-item" href="{{url('admin/anganwadi')}}">Anganwadi(अगनबाड़ी)</a>
                <a class="collapse-item" href="{{url('admin/anganwadihelper')}}">Anganwadi Helper(अगनबाड़ी सहायिका)</a>
                <a class="collapse-item" href="{{url('admin/asha')}}">Asha(आशा)</a>
                <a class="collapse-item" href="{{url('admin/anm')}}">ANM(सहायक नर्सिंग दाई)</a>
                <a class="collapse-item" href="{{url('admin/watchman')}}">Watchman(चौकीदार)</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Complaint -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/#')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Complaint</span></a>
    </li>
    <!-- Nav Item Blog Post -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/#')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Blog Post</span></a>
    </li>
    <!-- Nav Item - Scheme -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/#')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Scheme</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-envelope fa-fw"></i>
            <span>Subcribers</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#managewebsite" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage Website</span>
        </a>
        <div id="managewebsite" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('admin/addslider')}}">Slider</a>
                <a class="collapse-item" href="{{url('admin/testimonial')}}">Testimonial/Feedback</a>
                <a class="collapse-item" href="{{url('admin/#')}}">Village Member(पंचायत सदस्य)</a>
                <a class="collapse-item" href="{{url('admin/breakingnews')}}">Breaking news</a>
                <a class="collapse-item" href="{{url('admin/#')}}">News Banner</a>

            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->