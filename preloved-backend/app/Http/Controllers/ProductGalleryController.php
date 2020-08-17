<?php

namespace App\Http\Controllers;

// panggil form request dan model
use App\Http\Requests\ProductGalleryRequest;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // digunakan agar cms backend ini tidak bisa dibuka jika tidak login
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memanggil langsung relasi gambarnya, dalam relasi gambar berelasi dengan product
        // jadi bisa langsung ambil nama produk dari si galeri produk tersebut
        // untuk mengambil semua data yang ada di db
        // $items = ProductGallery::with('product')->get();

        // untuk ambil data di db berdasarkan paginate halaman
        $items = ProductGallery::with('product')->paginate(10);

        // memberi perintah atau assign data items ke dalam view
        return view('pages.product-galleries.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil data product terlebih dahulu
        $products = Product::all();

        // untuk panggil view
        return view('pages.product-galleries.create')->with([
            // karna kita butuh data produknya sendiri
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductGalleryRequest $request)
    {
        // fungsi untuk mengambil semua request, validasi dilakukan di productrequest yang rules nya sudah ditentuin di productrequest
        // jika request nya tervalidasi di fungsi productrequest maka fungsinya akan masuk ke dalam sini, dibawah berikut
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store(
            'assets/product','public'
        );

        // lalu masukkan modelnya
        ProductGallery::create($data);

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('product-galleries.index');
        // kenapa ga di taro url full nya? karna bisa aja berubah, karna kalo berubah url nya ga perlu rubah semuanya di controller, jadi gunain
        // yg udh disediain di route
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductGalleryRequest $request, $id)
    {
        // fungsi untuk mengambil semua request, validasi dilakukan di productrequest yang rules nya sudah ditentuin di productrequest
        // jika request nya tervalidasi di fungsi productrequest maka fungsinya akan masuk ke dalam sini, dibawah berikut
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        
        // bikin variabel lalu panggil modelnya
        $item =  ProductGallery::findOrFail($id);
        // lalu panggil function update
        $item->update($data);
        Alert::success('Success to Update!', 'Data yang dirubah berhasil diupdate, Gomawoo~~');
        //  Alert::toast('Toast Message', 'Toast Type');

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('products.index');
        // kenapa ga di taro url full nya? karna bisa aja berubah, karna kalo berubah url nya ga perlu rubah semuanya di controller, jadi gunain
        // yg udh disediain di route
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
         // bikin variabel lalu panggil modelnya
        $item =  ProductGallery::findOrFail($id);
        // lalu panggil function update
        $item->delete();
        Alert::success('Success to Delete!', 'Data berhasil dihapus, Gomawoo~~');

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('product-galleries.index');
        // kenapa ga di taro url full nya? karna bisa aja berubah, karna kalo berubah url nya ga perlu rubah semuanya di controller, jadi gunain
        // yg udh disediain di route
    }
}
