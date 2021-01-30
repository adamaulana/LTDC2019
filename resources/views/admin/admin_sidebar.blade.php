        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>                        
                        <li> <a href="{{url('/admin')}}" aria-expanded="false"><i class="fa fa-desktop"></i><span class="hide-menu">Dashboard</span></a></li>                        

                        <li> <a href="{{url('/admin/tambah_manual')}}" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Pendaftaran Manual</span></a></li>                        

                        <li> <a href="{{url('/admin/team')}}" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Data Tim</span></a></li>                        
                        
                        @if(Session::get('tipe_admin') == 1 || Session::get('tipe_admin') == 6)                        
                        <li> <a href="{{url('/setting_info')}}" aria-expanded="false"><i class="fa fa-info"></i><span class="hide-menu">File Info</span></a></li>
                        @endif
                        @if(Session::get('tipe_admin') == 1 || Session::get('tipe_admin') == 5)                        
                        <li> <a href="{{url('/setting_teknis')}}" aria-expanded="false"><i class="fa fa-trophy"></i><span class="hide-menu">File Lomba</span></a></li>
                        @endif

                        @if(Session::get('tipe_admin') == 1 || Session::get('tipe_admin') == 4 )                        
                        <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-gear"></i><span class="hide-menu">Pengaturan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('/setting_admin')}}">Web dan Admin</a></li>
                                <li><a href="{{url('/setting_sponsor')}}">Sponsor</a></li>                                
                            </ul>
                        </li>

                        @endif
                        
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->