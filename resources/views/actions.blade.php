
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 @foreach ($metas as $meta)

 <meta name="keywords" content="{{$meta->keywords}}">
 <meta name="description" content="{{$meta->description}}">
 <title> {{ $meta->title }}</title>
 @endforeach
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
  defer>
    <link    href="{{ asset('css/app.css') }}" rel="stylesheet" defer>
    <link     href="{{ asset('css/custom.css') }}" rel="stylesheet" defer>


</head>
<body>
  @include('partials.langNav')
    <!-- contianer -->
    <!-- Header Section -->

    <section class="header__main bg-gray ">
    <div class="container">
        <h1 class="header__title">{{__('actions.Hier_finden')}}</h1>
        <p class="header__subtitle">
         {{__('actions.Neben')}}
        </p>
    </div>

      </section>
      <!-- End Header Section -->
  <div class="container">
      <!-- Showcase Section -->
      <section class="showcase__main">
        <h2 class="showcase__title">{{__('actions.Click')}}</h2>
        <h3 class="showcase__subtitle">
        {{__('actions.Mobile')}}
        </h3>
        <p class="showcase__parg">
         {{__('actions.Mit_unseren')}}
        </p>
        <!--
       <div>
          <img
          class="showcase__img"
          src="./img/media.svg"
          alt="locker"
        />
        <h2 class="clc--main">Kontaktlose Übergabe & Lieferung</h2>
        <span class="showcase__clc clc-1 frist">Kontaklose Übergabeprozesse<span>
        <span class="showcase__clc clc-2">Sichere Lieferung von Waren oder Paketen</span>
        <span class="showcase__clc clc-3">Simple Inbetriebnahme-Plug and Play</span>
        <span class="showcase__clc clc-4">Sofort einsetzbar</span>
        <span class="showcase__clc clc-5">Liferzeit auf Anfrage<span>
       </div>
       -->
       <div id="Kontaktlose">

         <div class="Kontaktlose-img">
           <img height="300px" width="300px" src="{{url('lockers_section.svg')}}" alt="">
         </div>

         <div class="Kontaktlose-content">
          <h2>{{__('actions.Kontaktlose')}}</h2>
          <ul>
            <li>{{__('actions.Kontaklose_Übergabeprozesse')}}</li>
            <li>{{__('actions.sichere')}}</li>
            <li>{{__('actions.simple')}}</li>
            <li>{{__('actions.sofort')}}</li>
            <li>{{__('actions.lifezeit')}}</li>
          </ul>
         </div>

       </div>
      </section>


      <!-- End Showcase Section -->

      <!-- Angebote Section -->
      <section class="angebote__main">

        <h2 class="angebote__title">{{__('actions.Neue')}}</h2>
        @if($actions->count())
    @foreach ($actions as $action)

        <div class="angebote__product a">
          <div class="product__content p-4">
            <h2 class="product__title">{{$action->title}}</h2>
            @if($action->price)
            <span class="product__price">ab {{$action->price}} <i class="bi bi-currency-euro"></i></span>
            @else
            <span>{{__('actions.More_infomation_about_the_price')}} <a target="_blank" href="https://www.locktec.com/kontakt/">{{__('actions.Contact_us')}}</a></span>
            @endif
            <p class="product__parg">

              {{str_limit($action->body,200) }}
            </p>
            <button  class="product__button"
            data-bs-toggle="modal"
            data-bs-target="#a-{{$action->id}}">
            {{__('actions.Technical_specifications')}}
            </button>

          </div>

          <div class="product__img-1">
            <img  src="{{asset('storage/'.$action->image_path)}}" alt="locker" />
          </div>
        </div>



        @include('partials.model')





        @endforeach
        @else
        <div class="lead text-center">
            <p>{{__('actions.There_are_no_Action')}}</p>
        </div>
    @endif
      </section>


      <!-- End Angebote Section -->

      <!-- Carousel Section -->
  <!-- Modal -->



      <section class="carousel__main">
        <h2 class="carousel__title">Lockers</h2>
        <p class="carousel__parg">{{__('actions.Search_the_lockers')}}.</p>

        @foreach($categories as $category)



        <div class="carousel__product">
            <h2 class="carousel__product__title">{{$category->title}}</h2>

        <!-- CLICK & Collect -->

        @if($category->actions->count() > 0)
          <!-- Slider main container -->
          
          
        
          @foreach($category->actions as $a)
              <!-- Slides -->
              
              <div class="angebote__product2 ">
                <div class="product__content2 p-4">
                  <h2 class="product__title2">{{$a->title}}</h2>
                  @if($a->price)
                  <span class="product__price2">ab {{$a->price}} <i class="bi bi-currency-euro"></i></span>
                  @else
                  <span>{{__('actions.More_infomation_about_the_price')}} <a target="_blank" href="https://www.locktec.com/kontakt/">{{__('actions.Contact_us')}}</a></span>
                  @endif
                  <p class="product__parg2">
      
                  {{str_limit($a->body,200) }}
                  </p>
                  <button  class="product__button2"
                  data-bs-toggle="modal"
                  data-bs-target="#b-{{$a->id}}">
                  {{__('actions.Technical_specifications')}}
                  </button>
      
                </div>
      
                <div class="product__img-12">
                  <img src="{{asset('storage/'.$a->image_path)}}" alt="locker" />
                </div>
              </div>
      
          
      
              @include('partials.a')
            
        
            
              @endforeach
           
        </div>
       
         @else
        <div class="lead text-center">
            <div>{{__('actions.currently')}}</div>
        </div>
    @endif

        @endforeach





      </section>


    </div>

   <!-- Scripts -->
   <script   src="{{ asset('js/app.js') }}" defer></script>
    <script  src="https://kit.fontawesome.com/ca11177b7a.js" crossorigin="anonymous" defer></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script  src="https://unpkg.com/swiper@8/swiper-bundle.min.js" defer></script>
    <script  src="{{ asset('js/custom.js') }}"  defer></script>
</body>
</html>
