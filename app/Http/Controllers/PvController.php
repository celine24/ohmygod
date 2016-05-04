<?php namespace App\Http\Controllers;

use App\Pv;
use App\Http\Controllers\Controller;


class PvController extends Controller {

  /**
   * Send back all pvs as JSON
   *
   * @return Response
   */
  public function index($id = null)
  {
//    $pvs = Pv::with('Group')->with('Greek')->with('Host')->get();
//    return json_encode($pvs);
//    return Response::json(array('data' => $pvs));
//    $pv = Pv::with('Group')->with('Greek')->with('Host')->get();
//    return json_encode($pv);
    if ($id == null) {
      $pvs = Pv::with('Group')->with('Greek')->with('Host')->get();
      return json_encode($pvs);
    }
    else {
      return $this->show($id);
    }

//
//    $pvs = Pv::get();
//    return view('test', compact('pvs'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $pv = Pv::where('id', $id)->with('Group')->with('Greek')->with('Host')->get();
    return json_encode($pv);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>