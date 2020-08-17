<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route ('dashboard')}}"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Barang</li><!-- /.menu-title -->
                    <li class="">
                    <!-- product.index didapat dari resource yang membuat controller sebelumnya yang php artisan make controller -- resource, akan dibuatkan otomatis jika menggunakan resource -->
                        <a href="{{route ('products.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Barang</a>
                    </li>
                    <li class="">
                        <a href="{{route ('products.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                    </li>

                    <li class="menu-title">Kategori Barang</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route('categories.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Kategori Barang</a>
                    </li>
                    <li class="">
                        <a href="{{ route('categories.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Kategori Barang</a>
                    </li>

                    <li class="menu-title">Kategori Gender</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route('genders.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Kategori Gender</a>
                    </li>
                    <li class="">
                        <a href="{{ route('genders.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Kategori Gender</a>
                    </li>


                    <li class="menu-title">Foto Barang</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{route ('product-galleries.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Foto Barang</a>
                    </li>
                    <li class="">
                        <a href="{{route ('product-galleries.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah Foto Barang</a>
                    </li>

                    <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{route ('transactions.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                    </li>
                    <li class="">
                        <a href="{{route ('transfers.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Bukti Transfer</a>
                    </li>

                    <li class="menu-title">Laporan Pengunjung</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{route ('guestbooks.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Daftar Pengunjung</a>
                    </li>

                    <li class="menu-title">Daftar Subscribers</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{route ('subscribers.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Daftar Berlangganan</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->