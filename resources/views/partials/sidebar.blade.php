 <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logoc.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/home') }}"><font size="6" color="grey" face="AR DECODE">Home
                                    </font></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                           <a href="{{ route('kelas.index') }}">
                                <i class="fas fa-chart-bar"></i> Kelas</a>
                        </li>
                        <li>
                            <a href="{{ route('keterangan.index') }}">
                                <i class="fas fa-table"></i>Keterangan</a>
                        </li>
                        <li>
                             <a href="{{ route('siswa.index') }}">
                                <i class="far fa-check-square"></i>Siswa</a>
                        </li>
                        <li>
                            <a href="{{ route('absensi.index') }}">
                                <i class="fas fa-calendar-alt"></i>Absensi</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>