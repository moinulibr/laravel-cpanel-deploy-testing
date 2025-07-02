<ul class="nav">
    <li class="nav-item">
      <a class="nav-link {{ request()->segment(2)=='academic-setup'?'active':''}} btn btn-sm" aria-current="page" href="{{ route('admin.academicSetup')}}">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->segment(2)=='sections'?'active':''}} btn btn-sm" href="{{ route('admin.sections.index')}}"> Section</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->segment(2)=='classes'?'active':''}} btn btn-sm" href="#">Class</a>
    </li>

  </ul>