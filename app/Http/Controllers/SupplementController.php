<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Categorie;
use App\Models\Supplement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SupplementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplements=Supplement::all();

        return view('supplements.index')->with('supplements',$supplements);
    }
//supplements
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::get();

      return view('supplements.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile("cover")){
        $file=$request->file("cover");
        $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("cover/"),$imageName);


        $supplement =[
            "libelle" =>$request->libelle,
            "description" =>$request->description,
            "prix_intial" =>$request->prix_intial,
            "cover" =>$imageName,
            'categorie_id'=> $request->categorie_id,
        ];
        DB::table('supplements')->insert($supplement);
        $supplement_id = DB::getPdo()->lastInsertId();
   
    }
    if($request->hasFile("images")){
        $files=$request->file("images");

        foreach($files as $file){
            $imageName=time().'_'.$file->getClientOriginalName();
            $request['supplement_id']=$supplement_id;
            $request['image']=$imageName;
            $file->move(\public_path("/images"),$imageName);
            //Image::create($request->all());
            $image=['image'=>$imageName,'supplement_id'=>$supplement_id,'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()];
            DB::table('images')->insert($image);

        }
    }
    return redirect()->route('supplements.index')
    ->with('success','Product updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplement=Supplement::find($id);
        if(!$supplement) abort(404);
        $images=$supplement->image;
        return view('supplements.show',compact('supplement','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images=Image::get();
        $supplement =  Supplement::whereId($id)->first();
        $categories = Categorie::get();


        if(!$supplement){
            return back()->with('error', 'supplement non trouvé');
        }
        return view('supplements.edit',compact('supplement','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplement=Supplement::findOrFail($id);
        if($request->hasFile("cover")){
            if (File::exists("cover/".$supplement->cover)) {
                File::delete("cover/".$supplement->cover);
            }
            $file=$request->file("cover");
            $supplement->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$supplement->cover);
            $request['cover']=$supplement->cover;
        }
    
           $supplement->update([
            "libelle" =>$request->libelle,
            "description" =>$request->description,
            "prix_intial" =>$request->prix_intial,
            "cover" =>$supplement->cover,
            'categorie_id'=> $request->categorie_id,
           ]);
    
           if($request->hasFile("images")){
               $files=$request->file("images");
               foreach($files as $file){
                   $imageName=time().'_'.$file->getClientOriginalName();
                   $request["supplement_id"]=$id;
                   $request["image"]=$imageName;
                   $file->move(\public_path("images"),$imageName);
                   Image::create($request->all());
    
               }
           }
           return redirect()->route('supplements.index')
           ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('images')
        ->where('article_id',$id)
        ->delete();
        //dd($r);
        $supplement=Supplement::findOrFail($id);

         if (File::exists("cover/".$supplement->cover)) {
             File::delete("cover/".$supplement->cover);
         }
         $images=Image::where("supplement_id",$supplement->id)->get();
         foreach($images as $image){
         if (File::exists("images/".$image->image)) {
            File::delete("images/".$image->image);
        }
         }
         $supplement->delete();
         return back();
    }

    public function deleteimage($id){
        $images=Image::findOrFail($id);

        if (File::exists("images/".$images->image)) {
           File::delete("images/".$images->image);
       }

       Image::find($id)->delete();
       return back();
   }

   public function deletecover($id){
    $cover=Supplement::findOrFail($id)->cover;
    if (File::exists("cover/".$cover)) {
       File::delete("cover/".$cover);
   }
   return back();
}



}
