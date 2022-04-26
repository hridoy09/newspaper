<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use EasyBanglaDate\Types\BnDateTime; //for Bangla Time
use DB;
use App\Models\Post;
use App\Models\Subcategory;

class IndexController extends Controller
{

    protected $categories;
    

    public function __construct()
    {
        $this->categories = Category::with('subcategories')->get();
     
        view()->share('categories', $this->categories);
    }
 
    function home(){
     
        // $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        //   $data['categories'] =DB::table('categories')->orderBy('id','ASC')->limit(9)->get();

          $data['seos'] =DB::table('seos')->first();
          //start first blade
          $data['first_section_big'] =DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
        //first blade five row
            $data['first_section_fives'] =DB::table('posts')->select('id','title_bn','created_at','post_date')->orderBy('id','DESC')->limit(5)->get();
        //first blade four row
            $data['first_section_fours'] =DB::table('posts')->select('id','title_bn','created_at','image','post_date')->orderBy('id','DESC')->limit(4)->get();
        //first blade two row
            $data['first_section_twos'] =DB::table('posts')->select('id','title_bn','created_at','image','post_date')->orderBy('id','DESC')->limit(2)->get();
        // $data['subcategories'] =DB::table('subcategories')->where()->orderBy('id','ASC')->get();
        //end first blade  

        //secondbigpart start

        $data['secondbigpart_fifteens'] =DB::table('posts')->select('id','title_bn','created_at','image','post_date')->orderBy('id','DESC')->limit(15)->get();
        //shorboshash
                $data['secondbigpart_sorboshashs'] =DB::table('posts')->select('id','title_bn','post_date')->orderBy('id','DESC')->limit(5)->get();
        //sorbadik
                  $data['secondbigpart_sorbadiks'] =DB::table('posts')->select('id','title_bn','post_date')->inRandomOrder()->limit(4)->get();
        //secondbigpart end 

        //Bangladesh start 
       $categories_first =DB::table('categories')->orderBy('id','ASC')->first();
         $data['Bangladesh_parts'] =DB::table('posts')->where('id','cat_id',$categories_first->id)->limit(4)->get();  

        //Bangladesh end        

        //binodon start 
         $categories_skip1 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['binodons'] =DB::table('posts')->where('id','cat_id',$categories_skip1->id)->select('title_bn','image')->limit(4)->get();  

        //binodon end  

        //khela start 
         $categories_skip2 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['khelas'] =DB::table('posts')->where('id','cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->get();  

        //khela end 

        //rajniti start 
         $categories_skip3 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['rajnitis'] =DB::table('posts')->where('id','cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->inRandomOrder()->get();  

          $data['rajnitis1'] =DB::table('posts')->where('id','cat_id',$categories_skip2->id)->select('title_bn','image')->first();  
           $data['rajnitis2'] =DB::table('posts')->where('id','cat_id',$categories_skip2->id)->select('title_bn','image')->skip(1)->orderBy('id','DESC')->first(); 

        //rajniti end 


            //projucti start 
         $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['projuctis'] =DB::table('posts')->where('id','cat_id',$categoriesAll->id)->select('title_bn','image')->limit(6)->get();  
 

        //bishesh ayojon start 
         $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
          $data['bisheshayojons1'] =DB::table('posts')->where('id','cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->first();
           $data['bisheshayojons2'] =DB::table('posts')->where('id','cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->get();  
         $data['bisheshayojons'] =DB::table('posts')->where('id','cat_id',$categoriesAll->id)->select('title_bn','image')->limit(4)->get();  

        //bishesh ayojon  end 

         return view('frontend.home', $data);
    }
    

    function index(){
       

        // $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        //   $data['categories'] =DB::table('categories')->orderBy('id','ASC')->limit(9)->get();

          $data['seos'] =DB::table('seos')->first();
          //start first blade
          $data['first_section_big'] =DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
        //first blade five row
            $data['first_section_fives'] =DB::table('posts')->select('id','title_bn','created_at')->orderBy('id','DESC')->limit(5)->get();
        //first blade four row
            $data['first_section_fours'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(4)->get();
        //first blade two row
            $data['first_section_twos'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(2)->get();
        // $data['subcategories'] =DB::table('subcategories')->where()->orderBy('id','ASC')->get();
        //end first blade  

        //secondbigpart start

        $data['secondbigpart_fifteens'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(15)->get();
        //shorboshash
                $data['secondbigpart_sorboshashs'] =DB::table('posts')->select('title_bn')->orderBy('id','DESC')->limit(5)->get();
        //sorbadik
                  $data['secondbigpart_sorbadiks'] =DB::table('posts')->select('title_bn')->inRandomOrder()->limit(4)->get();
        //secondbigpart end 

        //Bangladesh start 
       $categories_first =DB::table('categories')->orderBy('id','ASC')->first();
         $data['Bangladesh_parts'] =DB::table('posts')->where('cat_id',$categories_first->id)->limit(4)->get();  

        //Bangladesh end        

        //binodon start 
         $categories_skip1 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['binodons'] =DB::table('posts')->where('cat_id',$categories_skip1->id)->select('title_bn','image')->limit(4)->get();  

        //binodon end  

        //khela start 
         $categories_skip2 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['khelas'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->get();  

        //khela end 

        //rajniti start 
         $categories_skip3 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['rajnitis'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->inRandomOrder()->get();  

          $data['rajnitis1'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->first();  
           $data['rajnitis2'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->skip(1)->orderBy('id','DESC')->first(); 

        //rajniti end 


            //projucti start 
         $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
         $data['projuctis'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(6)->get();  

        //projucti end 

        //bishesh ayojon start 
         $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
          $data['bisheshayojons1'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->first();
           $data['bisheshayojons2'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->get();  
         $data['bisheshayojons'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(4)->get();  

        //bishesh ayojon  end 

         return view('frontend.index', $data);
    }
    function single($id){
    
        // $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        // $data['categories'] =DB::table('categories')->orderBy('id','ASC')->limit(9)->get();

        $data['seos'] =DB::table('seos')->first();
        //start first blade
        $data['first_section_big'] =DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
      //first blade five row
          $data['first_section_fives'] =DB::table('posts')->select('title_bn','created_at')->orderBy('id','DESC')->limit(5)->get();
      //first blade four row
          $data['first_section_fours'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(4)->get();
      //first blade two row
          $data['first_section_twos'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(2)->get();
      // $data['subcategories'] =DB::table('subcategories')->where()->orderBy('id','ASC')->get();
      //end first blade  

      //secondbigpart start

      $data['secondbigpart_fifteens'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(15)->get();
      //shorboshash
              $data['secondbigpart_sorboshashs'] =DB::table('posts')->select('title_bn')->orderBy('id','DESC')->limit(5)->get();
      //sorbadik
                $data['secondbigpart_sorbadiks'] =DB::table('posts')->select('title_bn')->inRandomOrder()->limit(4)->get();
      //secondbigpart end 

      //Bangladesh start 
     $categories_first =DB::table('categories')->orderBy('id','ASC')->first();
       $data['Bangladesh_parts'] =DB::table('posts')->where('cat_id',$categories_first->id)->limit(4)->get();  

      //Bangladesh end        

      //binodon start 
       $categories_skip1 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['binodons'] =DB::table('posts')->where('cat_id',$categories_skip1->id)->select('title_bn','image')->limit(4)->get();  

      //binodon end  

      //khela start 
       $categories_skip2 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['khelas'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->get();  

      //khela end 

      //rajniti start 
       $categories_skip3 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['rajnitis'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->inRandomOrder()->get();  

        $data['rajnitis1'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->first();  
         $data['rajnitis2'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->skip(1)->orderBy('id','DESC')->first(); 

      //rajniti end 


          //projucti start 
       $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['projuctis'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(6)->get();  

      //projucti end 

      //bishesh ayojon start 
       $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
        $data['bisheshayojons1'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->first();
         $data['bisheshayojons2'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->get();  
       $data['bisheshayojons'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(4)->get();  

      //bishesh ayojon  end 
      $categories=Category::with('posts')->whereHas('posts')->get();
    

      
       $posts=Post::whereCatId($id)->paginate(10);


         return view('frontend.singlecat', compact('posts'),$data);
    }
    function singlecat($id){
    
        // $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        // $data['categories'] =DB::table('categories')->orderBy('id','ASC')->limit(9)->get();

        $data['seos'] =DB::table('seos')->first();
        //start first blade
        $data['first_section_big'] =DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
      //first blade five row
          $data['first_section_fives'] =DB::table('posts')->select('title_bn','created_at')->orderBy('id','DESC')->limit(5)->get();
      //first blade four row
          $data['first_section_fours'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(4)->get();
      //first blade two row
          $data['first_section_twos'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(2)->get();
      // $data['subcategories'] =DB::table('subcategories')->where()->orderBy('id','ASC')->get();
      //end first blade  

      //secondbigpart start

      $data['secondbigpart_fifteens'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(15)->get();
      //shorboshash
              $data['secondbigpart_sorboshashs'] =DB::table('posts')->select('title_bn')->orderBy('id','DESC')->limit(5)->get();
      //sorbadik
                $data['secondbigpart_sorbadiks'] =DB::table('posts')->select('title_bn')->inRandomOrder()->limit(4)->get();
      //secondbigpart end 

      //Bangladesh start 
     $categories_first =DB::table('categories')->orderBy('id','ASC')->first();
       $data['Bangladesh_parts'] =DB::table('posts')->where('cat_id',$categories_first->id)->limit(4)->get();  

      //Bangladesh end        

      //binodon start 
       $categories_skip1 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['binodons'] =DB::table('posts')->where('cat_id',$categories_skip1->id)->select('title_bn','image')->limit(4)->get();  

      //binodon end  

      //khela start 
       $categories_skip2 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['khelas'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->get();  

      //khela end 

      //rajniti start 
       $categories_skip3 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['rajnitis'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->inRandomOrder()->get();  

        $data['rajnitis1'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->first();  
         $data['rajnitis2'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->skip(1)->orderBy('id','DESC')->first(); 

      //rajniti end 


          //projucti start 
       $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['projuctis'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(6)->get();  

      //projucti end 

      //bishesh ayojon start 
       $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
        $data['bisheshayojons1'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->first();
         $data['bisheshayojons2'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->get();  
       $data['bisheshayojons'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(4)->get();  

      //bishesh ayojon  end 
   
    
      $subcategories=Subcategory::with('posts')->whereHas('posts')->get();

      
      
       $posts=Post::whereSubcatId($id)->paginate(10);

         return view('frontend.singlecat', compact('posts'),$data);
    }

    public function shownews($id)
    {
           // $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        //   $data['categories'] =DB::table('categories')->orderBy('id','ASC')->limit(9)->get();

        $data['seos'] =DB::table('seos')->first();
        //start first blade
        $data['first_section_big'] =DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
      //first blade five row
          $data['first_section_fives'] =DB::table('posts')->select('id','title_bn','created_at')->orderBy('id','DESC')->limit(5)->get();
      //first blade four row
          $data['first_section_fours'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(4)->get();
      //first blade two row
          $data['first_section_twos'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(2)->get();
      // $data['subcategories'] =DB::table('subcategories')->where()->orderBy('id','ASC')->get();
      //end first blade  

      //secondbigpart start

      $data['secondbigpart_fifteens'] =DB::table('posts')->select('title_bn','created_at','image')->orderBy('id','DESC')->limit(15)->get();
      //shorboshash
              $data['secondbigpart_sorboshashs'] =DB::table('posts')->select('title_bn')->orderBy('id','DESC')->limit(5)->get();
      //sorbadik
                $data['secondbigpart_sorbadiks'] =DB::table('posts')->select('title_bn')->inRandomOrder()->limit(4)->get();
      //secondbigpart end 

      //Bangladesh start 
     $categories_first =DB::table('categories')->orderBy('id','ASC')->first();
       $data['Bangladesh_parts'] =DB::table('posts')->where('cat_id',$categories_first->id)->limit(4)->get();  

      //Bangladesh end        

      //binodon start 
       $categories_skip1 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['binodons'] =DB::table('posts')->where('cat_id',$categories_skip1->id)->select('title_bn','image')->limit(4)->get();  

      //binodon end  

      //khela start 
       $categories_skip2 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['khelas'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->get();  

      //khela end 

      //rajniti start 
       $categories_skip3 =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['rajnitis'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->limit(4)->inRandomOrder()->get();  

        $data['rajnitis1'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->first();  
         $data['rajnitis2'] =DB::table('posts')->where('cat_id',$categories_skip2->id)->select('title_bn','image')->skip(1)->orderBy('id','DESC')->first(); 

      //rajniti end 


          //projucti start 
       $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
       $data['projuctis'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(6)->get();  

      //projucti end 

      //bishesh ayojon start 
       $categoriesAll =DB::table('categories')->orderBy('id','ASC')->skip(1)->first();
        $data['bisheshayojons1'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->first();
         $data['bisheshayojons2'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(2)->get();  
       $data['bisheshayojons'] =DB::table('posts')->where('cat_id',$categoriesAll->id)->select('title_bn','image')->limit(4)->get();  

      //bishesh ayojon  end 
        $posts=Post::find($id);
        return view('frontend.shownews',compact('posts'),$data);
    }

}
