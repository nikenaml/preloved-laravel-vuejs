<?php
// untuk membuat controller lewat cmd sangat efisien karna sudah dibuatkan struktur dari laravel untuk crudnya
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// karna akan menggunakan slug jadi harus di request terlebih dahulu
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// str fungsi helper bawaan dari laravel untuk slug

// untuk memanggil modelnya karna tidak otomatis, setiap fungsi harus tetep panggil, karna tidak terpanggil otomatis
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Category;
use App\Models\Gender;
use App\Http\Requests\ProductRequest;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
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
    public function index(Request $request)
    {
        // memanggil data dari database
        // $items = Product::all();
        if($request->has('search')){
            $items = Product::where('name','LIKE','%'.$request->search.'%')->with('category', 'gender')->orderBy('created_at')->paginate(10);
        }
        else {
        // untuk ambil data di db berdasarkan paginate halaman
        $items = Product::paginate(10);}

        // fungsi with merupakan variabel yang sudah di panggil sebelumnya
        return view('pages.products.index')->with([
            // karna sudah memanggil data product diatas, oleh itu kita parsing data product ke dalam variabel items, jadi di dalam index.blade.php bisa panggil item
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
        // return view('pages.products.create');
        //QUERY UNTUK MENGAMBIL SEMUA DATA CATEGORY
        $categories = Category::orderBy('id', 'ASC')->get();
        $genders = Gender::orderBy('id', 'ASC')->get();
        //LOAD VIEW create.blade.php` YANG BERADA DIDALAM FOLDER PRODUCTS
        //DAN PASSING DATA CATEGORY
        return view('pages.products.create')->with([
            'categories' => $categories,
            'genders' => $genders
        ]);
    }

    // public function search(Request $request){
    //     $search = $request->get('search');
    //     $products = DB::table('products')->where('name', 'like', '%' .$search. '%');
    //     return view('pages.products.index', ['products' => $products]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // fungsi untuk mengambil semua request, validasi dilakukan di productrequest yang rules nya sudah ditentuin di productrequest
        // jika request nya tervalidasi di fungsi productrequest maka fungsinya akan masuk ke dalam sini, dibawah berikut
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        // contoh :  unikelo Tshirt
        // menjadi : unikelo-tshirt, menjadi huruf kecil semua

        // lalu masukkan modelnya
        Product::create($data);

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('products.index');
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
        // apa bedanya findorfail dengan find biasa, kalo findorfail jika datanya
        // tidak ada akan redirect ke 404, kalo find saja data tidak ada akan error redirectnya
        $item = Product::findOrfail($id);
        $categories = Category::orderBy('name', 'ASC')->get();
        $genders = Gender::orderBy('name', 'ASC')->get();
        // return view('pages.products.edit')->with([
        //     'item' => $item
        // ]);
        return view('pages.products.edit', compact('item', 'categories', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        // fungsi untuk mengambil semua request, validasi dilakukan di productrequest yang rules nya sudah ditentuin di productrequest
        // jika request nya tervalidasi di fungsi productrequest maka fungsinya akan masuk ke dalam sini, dibawah berikut
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        
        // bikin variabel lalu panggil modelnya
        $item =  Product::findOrFail($id);
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
        $item =  Product::findOrFail($id);
        // lalu panggil function update
        $item->delete();

        // logic untuk hapus yang dengan halaman lain saling keterkaitan
        // saat product di delete maka secara otomatis, produk galeri ikut terhapus dengan produk id yang berelasi
        ProductGallery::where('products_id', $id)->delete();
        Alert::success('Success to Delete!', 'Data berhasil dihapus, Gomawoo~~');

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('products.index');
        // kenapa ga di taro url full nya? karna bisa aja berubah, karna kalo berubah url nya ga perlu rubah semuanya di controller, jadi gunain
        // yg udh disediain di route
     
    }

    public function gallery (Request $request, $id){
        // untuk mengecek datanya ada atau ga, kalo gada langsung diarahkan ke 404, kalo ada akan ke proses selanjutnya
        // id = mengambil galeri berdasarkan produknya saja
        $product = Product::findorFail($id);
        
        // kenapa ProductGallery karna kita akan mengambil data dari si fotonya sendiri
        $items = ProductGallery::with('product')
            ->where('products_id', $id)
            ->get();

        return view('pages.products.gallery')->with([
            'product' => $product,
            'items' => $items
        ]);
    }

    public function cetakPdf(){
        $items = Product::all();
        $pdf = PDF::loadView('pages.products.laporanpdf', ['items' => $items]);
        return $pdf->stream('Laporan Daftar Barang Toko Allbrands Preloved.pdf');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $items = Product::all();
        if($search){
        $products = Product::where("name","LIKE","%$search%");
        }
        return view('pages.products.index',['products' => $products]);
        // return redirect()->route('subscribers.index');
           
    }
    
}
