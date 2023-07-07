<?php

namespace App\Http\Controllers;

use App\Models\DeedNotice;
use App\Models\District;
use App\Models\Division;
use App\Models\Document;
use App\Models\DuplicateDeed;
use App\Models\OfficeName;
use App\Models\SarokNo;
use App\Models\SDocument;
use App\Models\SearchDeed;
use App\Models\SearchRelation;
use App\Models\SuchiOne;
use App\Models\SuchiTwo;
use App\Models\Thana;
use App\Models\Union;
use App\Models\User;
use App\Models\Year;
use App\Notifications\UserFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $suchione = SDocument::where('applicator_id', Auth::user()->id)->where('status','1')->get();
        $suchitwo = SearchDeed::where('applicator_id', Auth::user()->id)->where('status','1')->get();


        $sdeeds = SDocument::where('applicator_id', Auth::user()->id)->get();
        $qpdeeds = SearchDeed::where('applicator_id', Auth::user()->id)->get();
        $ddeeds = DuplicateDeed::where('applicator_id', Auth::user()->id)->get();

        /** Application Suchi Value Passing */
        // $sdeed = SDocument::where('applicator_id', Auth::user()->id)
        // ->first();
        // $suchiones = SuchiOne::where('year', $sdeed->search_year)->get();
        /** Application Suchi Value Passing */

        return view('user.home',compact('sdeeds','qpdeeds','ddeeds','suchione','suchitwo'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     *
     *
     */


    public function SDocument(){
        $OfficeName = OfficeName::all();
        $docs = Document::all();
        $search_rels = SearchRelation::where('status', '1')->get();
        $years= Year::orderBy('id','desc')->get();
        $data['divisions']=DB::table('divisions')->orderBy('id','asc')->get();

        return view('user.AppicationForm.SDocument', $data, compact('docs','OfficeName','search_rels','years'));
    }


    public function QPdocument(){
        $OfficeName = OfficeName::all();
        $docs = Document::all();
        $bohis = SarokNo::all();
        $data['divisions']=DB::table('divisions')->orderBy('id','asc')->get();

        return view('user.AppicationForm.QPdocument',$data, compact('docs','OfficeName','bohis'));
    }


	public function getDistrict(Request $request){
		$cid=$request->post('cid');
		$districts=DB::table('districts')->where('division_id',$cid)->orderBy('bn_name','asc')->get();
		$html='<option value="">Select Distric</option>';
		foreach($districts as $list){
			$html.='<option value="'.$list->id.'">'.$list->bn_name.'</option>';
		}
		echo $html;
	}

	public function getThana(Request $request){
		$cid=$request->post('cid');
		$thanas=DB::table('thanas')->where('district_id',$cid)->orderBy('bn_name','asc')->get();
		$html='<option value="">Select Thana</option>';
		foreach($thanas as $list){
			$html.='<option value="'.$list->id.'">'.$list->bn_name.'</option>';
		}
		echo $html;
	}

	public function getUnion(Request $request){
		$cid=$request->post('cid');
		$unions=DB::table('unions')->where('thana_id',$cid)->orderBy('bn_name','asc')->get();
		$html='<option value="">Select Union</option>';
		foreach($unions as $list){
			$html.='<option value="'.$list->id.'">'.$list->bn_name.'</option>';
		}
		echo $html;
	}
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     *
     *
     */

    public function DDocument(){
        $bohis = SarokNo::all();
        $docs = Document::all();
        return view('user.AppicationForm.DDocument',compact('bohis','docs'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function suchione(){
        /** Application Suchi Value Passing */
        $sdeed = SDocument::where('applicator_id', Auth::user()->id)
        ->first();
        $value = json_decode($sdeed->search_year, TRUE);
        $suchiones = SuchiOne::whereIn('year', $value)->get();
        /** Application Suchi Value Passing */
        $yearList = Year::all();
        return view('user.Suchi.suchione', compact('suchiones','yearList'));
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function suchitwo(){
        /** Application Suchi Value Passing */
        $sdeed = SDocument::where('applicator_id', Auth::user()->id)
                ->first();
        $suchitwos = SuchiTwo::where('jailNo', $sdeed->jailNo)
                ->get();
                /** Application Suchi Value Passing */
        return view('user.Suchi.suchitwo', compact('suchitwos'));
    }


}
