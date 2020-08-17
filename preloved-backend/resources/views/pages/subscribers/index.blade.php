@extends ('layouts.default')

@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"> Daftar Berlangganan Email</h4>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <form action="/subscribers" class="form-inline" method="GET">
                                    <div class="form-group mr-sm-3 mb-2">
                                        <input type="search" name="search" class="form-control" placeholder="Search by name">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </form>
                            </div>

                            <div class="col-md-6">
                            <a class="btn btn-primary float-right" href="{{ route('subscriber.cetakPdf') }}" class="btn btn-primary" target="_blank">Cetak PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Email Pelanggan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->nama_berlangganan}}</td>
                                            <td>{{$item->email_berlangganan}}</td>
                                            <td>
                                                <a href="{{route('subscribers.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>

                                                <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $item->id }}" data-action="{{ route('subscribers.destroy',$item->id) }}">  <i class="fa fa-trash"></i></button>
                                            
                                            </td>
                                        </tr>
                                    <!-- ini opsi jika datanya tidak ada, akan langsung di alihkan ke empty -->
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                            Data Tidak Tersedia
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- untuk link paginate halaman -->
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
                Showing 1 to 10 of {{$items->total()}}
            </div>
        </div>
    </div>
    <script type="text/javascript">
  $("body").on("click",".remove-user",function(){
    var current_object = $(this);
    swal({
        title: "Are You Sure For Delete?",
        text: "Data yang terhapus tidak dapat dikembalikan akan terhapus secara permanent!",
        type: "error",
        showCancelButton: true,
        dangerMode: true,
        cancelButtonClass: '#DD6B55',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Delete!',
    },function (result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
    });
});
</script>
</body>
@endsection