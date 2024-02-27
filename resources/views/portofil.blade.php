@extends("layouts.main")

@section('content')
<div class="flex flex-col items-start  gap-16 relative max-w-full h-947 bg-white">
  <!-- Header -->
  <div class="flex flex-col items-start ml-14 h-100">
    <!-- Info -->
    <div class="flex items-center    h-80">
      <div class="pb-10">
      <img class="w-40 h-40  rounded-full" src="{{'/storage'. $user->avatar}}" alt="{{$user->name}}">
      </div>


      <!-- Name and Role -->
      <div class="flex flex-col mb-0 ml-10  gap-5   h-54">
       
        <div class=" text h-30 whitespace-nowrap italic text-30 leading-46 font-serif tracking-0.05 text-6xl " >{{$user->name}}</div>
       
        <div class=" color w-172 h-20 text-xl font-normal  leading-12  tracking-widest  uppercase">{{$user->role}}</div>
      </div>
    </div>
    <!-- Contact -->
    <div class="flex items-center  absolute gap-2 mt-64 mr-20 h-0  w-300 ">
     
      <div class="flex  items-center  gap-2 w-127 ">
        <div class="w-4  bg-no-repeat bg-center"> <img src="/storage/vectors/GHYcAo98dgbVhrfXnTYB9d99Cv0yyeNnnOeVvU2E.png" alt=""></div>
        <div class = "w-90  text-sm  tracking-tighter text-gray-400 font-extralight whitespace-nowrap   leading-12  text-Black " ><a href="{{$user->email}}">email</a></div>
      </div>
      
      <div class="flex items-center gap-0 w-53 ">
        <div class="w-9 ml-4 bg-no-repeat bg-center"> <img src="/storage/vectors/krRL5acsGOs9FWDqozwf2JkTOxXRKflfV28sSCS1.jpg" alt=""></div>
        <div class="w-37   text-sm  tracking-tighter text-gray-400 font-extralight whitespace-nowrap   leading-12  text-Black " ><a href="{{$user->portofilo}}">portofilo</a></div>
      </div>
    
      <div class="flex items-center  gap-2 w-79 ">
        <div class="w-4 ml-5 mb-2 bg-no-repeat bg-center"> <img src="/storage/vectors/r7Sxwowdvzonl6cixc3DT2AqCoXcLWDUTXO1meFI.png" alt=""></div>
        <div class="w-63   text-sm  tracking-tighter text-gray-400 font-extralight whitespace-nowrap   leading-12  text-Black "><a href="{{$user->linkedin}}"></a>linkedin</div>
      </div>
     
      <div class="flex items-center  gap-2 w-65 ">
        <div class="w-5 ml-4 bg-no-repeat bg-center"> <img src="/storage/vectors/IqvvzPDWHucozk3gKnUssw69VI0EP2jnLYXi5DCh.png" alt=""></div>
        <div class="w-49  text-sm  tracking-tighter text-gray-400 font-extralight whitespace-nowrap   leading-12  text-Black "><a href="{{$user->instagram}}">instagram</a></div>
      </div>
    </div>
  </div>
  <!-- Introduction -->
  <div class="flex items-flex-start mr-20 ml-20 absolute mt-72 gap-6 w-300  bg-Light-Gray rounded-10">
    <div class=" border-0 border-gray-100 p-8 bg-gray-50 w-452 container  font-spectral font-thin rounded-lg  leading-100 text-gray-600 text-xl  tracking-tighter ">
     {{$user->introduction}}
    </div>
  </div>
  <!-- Experience -->
  <div class="flex flex-col mr-20 ml-14 items-start mt-20 gap-4 max-w-2xl h-420">
   
    <div class=" color tracking-widest  uppercase  w-74 h-12 text-10 leading-12 font-normal">Experience</div>
           @foreach($roles as $role)
      <div  >
        <div class="flex items-center leading-3 mb-10  gap-20  h-0  w-172">
              <span class=" text  font-spectral italic text-xl font-semibold  whitespace-nowrap" >{{$role->title}}</span> 
              <div class="flex items-center ">
              <div class="w-5 bg-no-repeat"> <img  src="storage/vectors/NP17hpw2FvLLNC4cpJ5J6y9yPO2NywIgAHJvGNzQ.jpg" alt=""></div>
              <span class=" text-sm tracking-tighter text-gray-400 font-extralight whitespace-nowrap"  >{{$role->company}}</span>
              </div>
              <div class="flex items-center ml-20 ">
              <div class="w-5 bg-no-repeat"> <img src="/storage/vectors/S2TzpkftVtF8gUHMFSmJ2LJ905bpMiASMyz1ZIaP.jpg" alt=""></div>
              <span  class="  text-sm tracking-tighter text-gray-400 font-extralight whitespace-nowrap" > {{$role->year}}</span>
              </div>
        </div>
        
           
              <div class="content tracking-tighter text-sm list-item space-y-2">
                 {!!$role->content!!} 
                   </div>
            
             
             
        
        <div>
        <p class="tracking-tighter text-sm mr-80">
            {{$role->summary}}
        </div>
      </div>
      <div class="border-t border-gray-200 w-full"></div>

             @endforeach

            


             <!-- // skills education  -->
             <div class="flex justify-between mt-10 w-full">
    <div class="w-48 ml-5">
      <div>
        <h2 class=" color   tracking-widest  uppercase  mb-5 ">skills</h2>
      </div>
            
        <div class="mb-4  ">
        @foreach($skills as $skill)
           <div class="space-16 mb-4 leading-4 ">
           <h3 class=" text  text-xl font-normal  font-spectral italic mb-1">{{$skill->name}}</h3>
            <p class="text-sm text-gray-600">{{$skill->tools}}</p>
           </div>
            @endforeach
        </div>
        <div class="my-4">
            <h3 class=" text mt-8 text-xl font-normal  font-spectral italic mb-1">langueges</h3>
            <p class="text-sm text-gray-600"> Turkish ,English</p>
        </div>
       
    </div>
    <div class="w-48 mr-5">
      <div>
        <h2 class=" color tracking-widest  uppercase  mb-5 " >education</h2>
      </div>
        <div class="mb-4">
               @foreach($degrees as $degree)
            <h3 class=" text  text-xl font-normal  font-spectral italic mb-1">{{$degree->section}}</h3>
            
            <div class="flex items-center  mb-10  gap-10  h-0  w-500">
            <div class="flex items-center mt-2  ">
              <div class="w-7 bg-no-repeat"> <img src="storage/vectors/rkdpDXVcVxyFUmTSBzGRr1LqlJcV1MArICuYZGzb.jpg" alt=""></div>
              <span class=" text-sm tracking-tighter text-gray-400 font-extralight whitespace-nowrap"  >{{$degree->institutions}}</span>
              </div>
              <div class="flex items-center mt-2 ">
              <div class="w-5 bg-no-repeat"> <img src="/storage/vectors/S2TzpkftVtF8gUHMFSmJ2LJ905bpMiASMyz1ZIaP.jpg" alt=""></div>
              <span  class="  text-sm tracking-tighter text-gray-400 font-extralightwhitespace-nowrap" > {{$degree->year}}</span>
              <br/>
              <hr/>
              <div class="border-t w-full  border-gray-400 "></div>
              </div>
              


        </div>
              @endforeach
        </div>
       
    </div>
</div>
<style>
 
 
</style>


@endsection('content')