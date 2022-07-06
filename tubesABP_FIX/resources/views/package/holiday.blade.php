@extends('layouts.navigation')


@section('priceCOBA')



<section class="destination" id="destination">

    <div class="heading">
        <h1>Labuan Bajo</h1>
    </div>
    <br>
    <br>

    <div class="box-container">

        @foreach($dbpaket as $item)
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/lbj3.jpg" alt="">
            </div>
            <div class="content">
                <h3>{{$item->nama}}</h3>

                <br>
                {{-- <li>{{$item->nama}}</li> --}}
                <li>{{$item->durasi}}</li>
                <li>{{$item->pulau}}</li>
                <li>{{$item->fasilitas}}</li>
                <li>{{$item->fasilitas2}}</li>
                <li>{{$item->fasilitas3}}</li>
                <br>
                <h2>
                    @currency($item->harga)/pax
                    {{-- Rp4.200.000,00/pax --}}
                </h2>
                <br>


                <a href="#">Book <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        @endforeach




        {{-- <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/lbj2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Safari Tour</h3>

                <br>
                <li>4 days 3 nights</li>
                <li>3 islands</li>
                <li>komodo national park</li>
                <li>diving</li>
                <li>pink beach + tracking</li>
                <li>full ship facilities</li>
                <br>
                <h2>
                    Rp3.500.000,00/pax
                </h2>
                <br>


                <a href="#">book <i class="fas fa-angle-right"></i></a>
            </div>
        </div>






        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/lbj1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Escape Tour</h3>

                <br>
                <li>3 days 2 nights</li>
                <li>2 islands</li>
                <li>komodo national park</li>
                <li>diving</li>
                <li>tracking</li>
                <li>full ship facilities</li>
                <br>
                <h2>
                    Rp2.100.000,00/pax
                </h2>
                <br>



                <a href="#">book <i class="fas fa-angle-right"></i></a>
            </div>
        </div> --}}


    </div>

</section>








@endsection