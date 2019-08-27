<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Exception;
use DB;
use Validator; 

class IndexController extends Controller
{
	public $error;

	//Index page
    public function index(){
        $articles= new Article;
        $articles=Article::select()->paginate(4);

        return view('page')->with(['articles'=>$articles]);
    }

    //Add
    public function add(){
    	return view('add-content');
    }

    public function getlist(){
   
        $articles=Article::select()->get();

        return view('table')->with(['articles'=>$articles]); 
    }

    //Store
    public function store(Request $request){
        
    	try{

    		if (isset($_POST)) {
  			$filename=$_FILES['image']['name'];

		    $blacklist = ['.php', '.phtml', '.php3', '.php4', '.html', '.htm','.doc','.docx','.txt'];
		    foreach ($blacklist as $item) {
		        if (preg_match("/$item$/", $_FILES['image']['name'])){throw new Exception('File extension not suitable!');
		        }
		    }
		    
		    $type = getimagesize($_FILES['image']['tmp_name']);
		    if ($type && ($type['mime'] != 'image/png' || 
		    $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		        if ($_FILES['image']['size'] < 1024 * 10000) {
		            $upload = 'C:\OSPanel\domains\booklist\public\img\\'.$_FILES['image']['name'];

		            $this->validate($request, [
                        'author' => 'required|max:70',
                        'name' => 'required|unique:articles|max:70',
                        'desc'=>'required',
                        'count'=>'required|min:2|max:4',]);

                        $data=$request->all();
    			        $article = new Article;
    			        $article->fill($data);
    			        $article->save();

            		    $query=Article::select(['id','image'])->where('id',$article->id)->update(['image' => $filename]);
                        
		            if (move_uploaded_file($_FILES['image']['tmp_name'], $upload)) {return redirect('/');}
		            else {throw new Exception('Error loading file');
		        }
		        }
		        else {throw new Exception('File size exceeded! (Max:  10mb)');
		    }
		    }
		    else {throw new Exception('File type not suitable');}
    		}
    	}
    	catch(Exception $e){
    		$this->error=$e->getMessage();
    		return view('add-content')->with(['error'=>$this->error]);
    	}

    }
    
}
