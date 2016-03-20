<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;

class ImageManagerController extends Controller{
	
	protected $root = 'uploads/users';
	protected $imgext = ['bmp', 'gif', 'jpg', 'jpe', 'jpeg', 'png', 'tif', 'tiff'];    // allowed image extensions
	protected $maxSize = 10000;
	
	
	public function ajax(Request $request){
		
		try{
			$id = $request->user()->id;
				
			$root = trim($this->root, '/') .'/' . $id .'/';
						
			$url = $_SERVER['DOCUMENT_ROOT'] .'/'. $root;
			
			if(!is_dir($url)){
				//Directory does not exist, so lets create it.
				mkdir($url, 0777, true);
			}
			$obdr = new \DirectoryIterator($url);
			
			// get protocol and host name to add absolute path in <img src>
			$protocol = !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
			$site = $protocol. $_SERVER['SERVER_NAME'] .'/';
			
			$images = array();
				
			foreach($obdr as $key => $fileobj) {
				$name = $fileobj->getFilename();
				$path = $fileobj->getPath();
				$path = trim(stristr($path,$root),'/');
					
				// if image file, add data in $images
				if($fileobj->isFile() && in_array($fileobj->getExtension(), $this->imgext)){
					$img = '/'. $root . $name;
					$images[$key] = '<div style="height: 150px" class="col-lg-3 col-md-4 col-xs-6 thumb"><a class="thumbnail" href="#"><img class="img-responsive" style="max-height: 150px" src="'.$img.'" alt="'.$name.'"></a></div>';
				}//end if

			}//end foreach
								
			$reply = array(
				'img' => $images
			);
			return json_encode($reply);
		}//end try
		catch(Exception $e) {
			return false;
		}

	}//end ajax()
	
	public function uploadImage(Request $request){
		try {
		
			$id = $request->user()->id;
			
			$upload_dir = $_SERVER['DOCUMENT_ROOT'] .'/'. trim($this->root, '/') .'/' . $id .'/';
			
			if(!is_dir($upload_dir)){
				//Directory does not exist, so lets create it.
				mkdir($upload_dir, 0777, true);
			}
			
			if(isset($_FILES['upload'])) {
				$img_name = basename($_FILES['upload']['name']);
				$uploadpath = $upload_dir . $img_name; // full file path
				$ext = explode('.', strtolower($_FILES['upload']['name']));
				$type = end($ext);       // gets extension
				
				if(!in_array($type, $this->imgext)){ 
					$err = 'Não é possível fazer o upload desse tipo de arquivo.';
					return $err;
				}
				
				if($_FILES['upload']['size'] > $this->maxSize * 1024){
					$err = 'Erro - O arquivo não deve ser maior do que '. $this->maxSize . ' kB.';
					return $err;
				}
				
				if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath)) {
	
					return 'Arquivo enviado com sucesso';
				}
				
				return 'Falha ao salvar o arquivo';
				
			}
			return 'Arquivo não enviado corretamente. Verifique o tamanho máximo e tente novamente.';
		}
		catch (Exception $e) {
			return 'Erro. Tente novamente mais tarde';
		}
	} 
}