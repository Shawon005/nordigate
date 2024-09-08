<?php
use Illuminate\Http\Request;
function saveFile(Request $request,$input)
{
    $file = $request->file($input);
    $ext = $file->extension();
    $filename = now()->timestamp.Str::random(20).'.'.$ext;

    $path = 'uploads'.date('/y') . '/' . date('m') . '/';
    $filePath = $path.$filename;
   
    $file->move('storage/uploads'.date('/y') . '/' . date('m') . '/',$filename);
    // Storage::put($filePath, file_get_contents($file));

    return Storage::url($filePath);
}

function dateFormatconverter($date)
{
  if($date==null)
  {
    return '';
  }
    $phpdate = strtotime($date);
    return date("d, M Y", $phpdate);
}
function setting()
{
  $footer=DB::table('settings')->where('id',1)->first();
  return $footer;
}
function cat($id)
{
  $table=DB::table('project_categories')->where('id',$id)->first();
  return $table->category_name;
}