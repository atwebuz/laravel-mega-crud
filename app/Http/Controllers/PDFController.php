<?php
  
    namespace App\Http\Controllers;
      
    use App\Models\Post;
    use PDF;
      
    class PDFController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function generatePDF()
        {
            $posts = Post::get();
      
            $data = [
                'title' => 'atweb uz',
                'date' => date('m/d/Y'),
                'posts' => $posts
            ]; 
                
            $pdf = PDF::loadView('posts.pdf', $data);
         
            return $pdf->download('post.pdf');
        }
    }

