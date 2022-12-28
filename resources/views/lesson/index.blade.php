<style>
    .laravel-embed__responsive-wrapper { position: relative; height: 0; overflow: hidden; max-width: 100%; } 
    .laravel-embed__fallback { background: rgba(0, 0, 0, 0.15); color: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; } 
    .laravel-embed__fallback,
    .laravel-embed__responsive-wrapper iframe,
    .laravel-embed__responsive-wrapper object,
    .laravel-embed__responsive-wrapper embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
/* # The Rotating Marker # */
details summary::-webkit-details-marker { display: none; }
summary::before {
  font-family: "Hiragino Mincho ProN", "Open Sans", sans-serif;
  content: "▶";
  position: absolute;
  top: 1rem;
  left: 0.8rem;
  transform: rotate(0);
  transform-origin: center;
  transition: 0.2s transform ease;
}
details[open] > summary:before {
  transform: rotate(90deg);
  transition: 0.45s transform ease;
}

/* # The Sliding Summary # */
details { overflow: hidden; }
details summary {
  position: relative;
  z-index: 10;
}
@keyframes details-show {
  from {
    margin-bottom: -80%;
    opacity: 0;
    transform: translateY(-100%);
  }
}
details > *:not(summary) {
  animation: details-show 500ms ease-in-out;  
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  color: transparent;  
  height: 450px;
  overflow: auto;
}
details[open] > *:not(summary) { color: inherit; }

/* # Style 5 # */
details.style5 summary {
  padding-right: 2.2rem;
  padding-left: 1rem;
}
details.style5 summary::before {
  content: "😨";
  font-size: 1.5rem;
  top: 0.5rem;
  left: unset;
  right: 0.5rem;
  transform: rotate(0);
}
details.style5:hover > summary::before {
  content: "😰";
}
details[open].style5 > summary::before {
  content: "🥶";
  transform: rotate(0deg);
}
details[open].style5 > summary:hover::before {
  content: "😱";
}
details .monkey-see { display: inline; }
details .monkey-hide { display: none; }
details[open] .monkey-see { display: none; }
details[open] .monkey-hide { display: inline; }

/* # Just Some Pretty Styles # */
body { font-family: "Open Sans", sans-serif;}
img { max-width: 100%; }
p { margin: 0; padding-bottom: 10px; }
p:last-child { padding: 0; }
details {
  max-width: 500px;
  box-sizing: border-box;
  margin-top: 5px;
  background: rgb(0, 0, 0);
}
summary {
  border: 4px solid transparent;
  outline: none;
  padding: 1rem;
  display: block;
  background: #666;
  color: white;
  padding-left: 2.2rem;
  position: relative;
  cursor: pointer;
}
details[open] summary,
summary:hover {
  color: #51abff;
  background: rgb(65, 65, 65);
}
summary:hover strong,
details[open] summary strong,
summary:hover::before,
details[open] summary::before {
  color: #0084ff;
}
.content {
  padding: 10px;
  border: 2px solid #3d85c8;
  border-top: none;
}
.responsive-video {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 60px; overflow: hidden;
}

.responsive-video iframe,
.responsive-video object,
.responsive-video embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>
@extends('layouts.main')

@section('tampilan')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        <h2><a style="color: white" href="/courseuser"><b>My Course</b> </a>/ {{ $title }}</h2>
    </div>
</div><!-- End Breadcrumbs -->

<div class="container my-4">
  <div class="row justify-content-md-center">
    <div class="col col-lg-7 my-5">   
      <div class="tab-content" id="v-pills-tabContent">
        @foreach ($lesson as $lesson)        
        <div class="tab-pane fade" id="v-pills-home{{ $loop->iteration }}" role="tabpanel" aria-labelledby="v-pills-home-tab{{ $loop->iteration }}">
          <x-embed url="{{ $lesson->video }}"/> 
          <h3 class="mt-3"><strong>{{ $lesson->videotitle }}</strong> </h3> 
          <p class="text-muted">{{ $lesson->course->title }} 🔹 {{ $lesson->section->title }}</p>
          <h5 class="my-4"><strong>Rangkuman Video</strong></h5>
          <hr class="dropdown-divider" style="border-color: white">
          <p>
            {!! $lesson->body !!}
          </p> 
          
          <hr class="dropdown-divider" style="border-color: white"> 
          @if ($lesson->pdf != null)
          <h5 class="my-4 text-center "><strong>🔷PDF🔷</strong></h5>
          <hr class="dropdown-divider" style="border-color: white">
          <div class="responsive-video">
          <iframe  src="http://localhost:8000/storage/{{$lesson->pdf }}" ></iframe> </div>
          @endif
          
          @if ($lesson->file != null)          
          <h5 class="my-4 text-center "><strong>Download Additional Files &nbsp;&nbsp; : &nbsp;&nbsp;</strong> 
            <a href="http://localhost:8000/storage/{{$lesson->file }}">                       
              <button class="btn btn-outline-light" type="button">Download</button>  
          </a>
          </h5>          
         
          @endif
        </div>
        @endforeach
      </div>
  
    </div>
    <div class="col col-lg-3 ">      
      <details class="style5 my-5 ">
        <summary class=""><span class="monkey-see">Click Here To See <strong>Module</strong></span><span class="monkey-hide">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Module</strong> Structure</span></summary>
        <div class="content">
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">            
            @foreach ($lesson1 as $lesson1)      
            <hr class="dropdown-divider" style="border-color: white">       
            <button class="nav-link text-white text-start" id="v-pills-home-tab{{ $loop->iteration }}" data-bs-toggle="pill" data-bs-target="#v-pills-home{{ $loop->iteration }}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            <div class="container ">
              <div class="row">
                <div class="col-sm mt-2 position-absolute start-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-play" viewBox="0 0 16 16">
                    <path d="M6 6.883v4.234a.5.5 0 0 0 .757.429l3.528-2.117a.5.5 0 0 0 0-.858L6.757 6.454a.5.5 0 0 0-.757.43z"/>
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                  </svg>
                </div>
                <div class="col-sm">
                  {{ $lesson1->videotitle }}
                </div>
              </div>              
            </div>
          </button>

            @endforeach
            
          </div>
          </div>
        </details>
      </div>
    </div>
  </div>
</div>

  











    

    {{-- <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            @foreach ($lesson as $lesson)        
            <button class="nav-link my-1" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile{{$loop->iteration }}" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><b>Section {{$loop->iteration }} | {{ $lesson->title }}</b></button>
            @endforeach
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">        
        @foreach ($lesson1 as $lesson)    
        <div class="tab-pane fade" id="nav-profile{{$loop->iteration }}" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3 mt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home{{$loop->iteration }}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: white">PDF</button>
                  <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile{{$loop->iteration }}" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"  style="color: white">{{ $lesson->video1title }}</button>
                  <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages{{$loop->iteration }}" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"  style="color: white">{{ $lesson->video2title }}</button>
                  <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings{{$loop->iteration }}" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"  style="color: white">{{ $lesson->video3title }}</button>
                  <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settingsz{{$loop->iteration }}" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"  style="color: white">Download additional files</button>
                </div>
                
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home{{$loop->iteration }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <iframe src="http://localhost:8000/storage/{{$lesson->pdf }}" height="610" width="1080" frameborder="0" scrolling="auto"></iframe>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile{{$loop->iteration }}" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <x-embed url="{{ $lesson->video1 }}"/>
                    <iframe height="2" width="1080"></iframe>
                </div>
                  <div class="tab-pane fade" id="v-pills-messages{{$loop->iteration }}" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <x-embed url="{{ $lesson->video2 }}"/>
                    <iframe height="2" width="1080"></iframe>
                </div>
                  <div class="tab-pane fade" id="v-pills-settings{{$loop->iteration }}" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <x-embed url="{{ $lesson->video3 }}"/>
                    <iframe height="2" width="1080"></iframe>
                </div>
                  <div class="tab-pane fade " id="v-pills-settingsz{{$loop->iteration }}" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="mx-5 my-5">
                      <a href="http://localhost:8000/storage/{{$lesson->file }}">
                      <div class="d-grid gap-2">                        
                        <button class="btn btn-outline-light" type="button">Click Here</button>                                              
                      </div>                      
                    </div>
                  </a>
                    <iframe height="480" width="1080"></iframe>
                </div>
                </div>
              </div>
        </div>
        @endforeach
    </div> --}}
    {{-- <a href="{{ url('/storage', $lesson->pdf) }}">download</a> --}}
    {{-- <iframe src="http://localhost:8000/storage/{{$lesson->pdf }}" height="580" width="600" frameborder="0" scrolling="auto"></iframe>    --}}
    {{-- <div class="ratio ratio-16x9">
        <iframe src="http://localhost:8000/storage/{{$lesson->pdf }}" title="YouTube video" allowfullscreen></iframe>
        </div> --}}

        
            {{-- <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach ($lesson as $lesson)                                
                <button class="nav-link" id="v-pills-profile-tab{{ $lesson->id }}" data-bs-toggle="pill" data-bs-target="#v-pills-profile{{ $lesson->id }}" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">{{ $lesson->title }}</button>
                @endforeach
            </div>
            <div class="tab-content" id="v-pills-tabContent">    
                @foreach ($lesson1 as $lesson)                
                <div class="tab-pane fade" id="v-pills-profile{{ $lesson->id }}" role="tabpanel" aria-labelledby="v-pills-profile-tab{{ $lesson->id }}">                    
                <iframe src="http://localhost:8000/storage/{{$lesson->pdf }}" height="580" width="600" frameborder="0" scrolling="auto"></iframe>
                </div>              
                @endforeach          
            </div>          </div>  --}}

          {{-- <iframe src="http://localhost:8000/storage/{{$lesson->pdf }}" height="580" width="600" frameborder="0" scrolling="auto"></iframe> --}}
        

@endsection