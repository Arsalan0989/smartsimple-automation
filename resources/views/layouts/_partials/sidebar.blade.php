        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-text mx-1">{{ config('app.name', 'Laravel') }} <sup class="text-success">Beta</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Basics
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clientDropdown"
                    aria-expanded="true" aria-controls="clientDropdown">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Forms</span>
                </a>
                <div id="clientDropdown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">forms:</h6>
                        <a class="collapse-item" href="{{route('form.create')}}">Add new form</a>
                        <a class="collapse-item" href="{{ route('form.index') }}">List forms</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clientDropdown"
                    aria-expanded="true" aria-controls="clientDropdown">
                    <i class="fas fa-fw fa-users"></i>
                    <span>People</span>
                </a>
                <div id="clientDropdown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clients:</h6>
                        <a class="collapse-item" href="{{route('client.create')}}">Add new client</a>
                        <a class="collapse-item" href="{{ route('client.index') }}">List clients</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#entityDropdown"
                    aria-expanded="true" aria-controls="entityDropdown">
                    <i class="fas fa-fw fa-table"></i>
                    <span>System Entities</span>
                </a>
                <div id="entityDropdown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">System Entities:</h6>
                        <a class="collapse-item" href="{{route('entity.create')}}">Add new entity</a>
                        <a class="collapse-item" href="{{ route('entity.index') }}">List entities</a>
                    </div>
                </div>
            </li>
            @if(!empty(request()->user()) && request()->user()->companyInfo->entities->count() > 0)
                @foreach(request()->user()->companyInfo->entities as $companyEntity)
                @if($companyEntity->published && $companyEntity->show_in_menu)
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#entityDropdown{{ $companyEntity->id }}"
                        aria-expanded="true" aria-controls="entityDropdown{{ $companyEntity->id }}">
                        <i class="fas fa-fw fa-table"></i>
                        <span>{{ $companyEntity->menu_title }}</span>
                    </a>
                    <div id="entityDropdown{{ $companyEntity->id }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">{{ $companyEntity->description }}</h6>
                            <a class="collapse-item" href="{{ route('add.entity.records', ['entityid' => $companyEntity->id]) }}">Add new</a>
                            <a class="collapse-item" href="{{ route('list.entity.records', ['entityid' => $companyEntity->id]) }}">List</a>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>