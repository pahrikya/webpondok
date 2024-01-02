<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class KegiatanController extends Controller
{
    //
    public function index(Request $request){
        $kegiatan = Kegiatan::all();
        $kegiatanToday = Kegiatan::whereDate('created_at', Carbon::today())->get();
        
        if ($request->ajax()) {
            return DataTables::of($kegiatan)
                ->addIndexColumn()
                ->editColumn('gambar', function($row) {
                    $gambar = ($row->gambar) ? asset("assets/media/kegiatan/".$row->gambar) : asset("assets/media/avatars/avatar0.jpg");

                    return '<img src="'. $gambar .'" class=" border bg-secondary" style="max-width: 100px" alt="'.$row->gambar.'">';
                })
                ->editColumn('headline', function($row) {
                    $gambar = ($row->headline == 1) ? '<span class="badge badge-success">True</span>' : '<span class="badge badge-danger">False</span>';

                    return $gambar;
                })
                ->editColumn('created_at', function($row){
                    return $row->created_at->diffForHumans();
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div class="row"><a class="btn btn-sm btn-secondary m-5" href="'.route('admin.kegiatan.show', $row->id).'">
                            <i class="fa fa-pencil text-primary mr-5"></i> Edit
                        </a>
                        <form id="form-delete-'.$row->id.'" action="'.route('admin.kegiatan.delete', $row->id).'" method="post">
                        '.csrf_field().'
                            <button type="button" class="btn btn-sm btn-secondary m-5" onclick="return confirm('.$row->id.')">
                                <i class="fa fa-times text-danger mr-5"></i> Delete
                            </button>
                        </form>
                        <button type="button" class="btn btn-sm btn-secondary m-5" onclick="return edit('.$row->id.')">
                            <i class="fa fa-eye text-info mr-5"></i> Detail
                        </button>
                        </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'deskripsi', 'gambar', 'kategori', 'created_at', 'judul', 'penulis', 'headline'])
                ->make(true);
        }


        return view('page.admin.kegiatan.index', compact('kegiatan', 'kegiatanToday'));
    }
    public function create(Request $request){
        return view('page.admin.kegiatan.create');
    }

    public function store(Request $request){
        $valid = Validator::make($request->all(), [
            'judul' => 'required',
            'headline' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        if ($valid->fails()) {
            toast($valid->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }
        // dd($request->all());
        $new_image = $request->file('gambar');
        $file_name = time() . $request->nama_product.'.' . $new_image->extension();

        $new_image->move('assets/media/kegiatan', $file_name);

        $save = Kegiatan::create([
            'judul' => $request->judul,
            'penulis' => 'admin',
            'headline' => $request->headline,
            'kategori' => 'kegiatan',
            'deskripsi' => $request->deskripsi,
            'gambar' => $file_name,
        ]);

        if ($save) {
            toast("Success Add Data", 'success');
            return redirect()->route('admin.kegiatan');
        }
        toast("Failed Add Data", 'error');
        return redirect()->route('admin.kegiatan');
    }
    public function show($id,Request $request){
        $kegiatan = Kegiatan::find($id);
        if ($request->ajax()) {
            return $kegiatan;
        }
        return view('page.admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update($id,Request $request){

        $valid = Validator::make($request->all(), [
            'judul' => 'required',
            'headline' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($valid->fails()) {
            toast($valid->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }
        
        $kegiatan = Kegiatan::find($id);
        $kegiatan->judul = $request->judul;
        $kegiatan->headline = $request->headline;
        $kegiatan->deskripsi = $request->deskripsi;
        
        if ($request->file('gambar')) {
            File::delete('assets/media/kegiatan/'.$kegiatan->gambar);
            
            $new_image = $request->file('gambar');
            $file_name = time() . $kegiatan->nama.'.' . $new_image->extension();
            $new_image->move('assets/media/kegiatan', $file_name);

            $kegiatan->gambar = $file_name;
        }
        $save = $kegiatan->update();
        
        if ($save) {
            toast("Success Updated Data", 'success');
            return redirect()->route('admin.kegiatan');
        }
        toast("Failed Updated Data", 'error');
        return redirect()->route('admin.kegiatan');
    }
    public function delete($id){
        $product = Kegiatan::find($id);
        File::delete('assets/media/kegiatan/'.$product->gambar);
        $delete = $product->delete($id);

        if ($delete) {
            return ['msg' => 'Success Delete Data', 'code' => 200];
        }
        return ['msg' => 'Error Delete Data','code' => 500];
    }

    public function home(){
        $kegiatan = Kegiatan::paginate(8);
        $kegiatanHeadline = Kegiatan::where('headline', 1)->limit(3)->get();
        // return $kegiatan;
        return view('page.frontend.kegiatan', compact('kegiatan', 'kegiatanHeadline'));
    }
}
