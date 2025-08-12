@extends('pages.layout')

@section('title', 'Home Page')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
            <h1 class="display-5 mb-4">Premium Ferro Alloys for Steelmaking</h1>
        </div>

        <!-- Silico Manganese -->
        <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-md-5">
                <img class="img-fluid rounded" src="{{ asset('img/silico-manganese.jpeg')}}" alt="Silico Manganese">
            </div>
            <div class="col-md-7">
                <h3>Silico Manganese (HC/MC/LC)</h3>
                <p>Silico Manganese is an alloy composed primarily of manganese, silicon, and iron, widely used in steelmaking. It acts as a deoxidizer and improves hardness, strength, and wear resistance. Available in High Carbon (HC), Medium Carbon (MC), and Low Carbon (LC) grades, it suits varied metallurgical needs. HC grades are used in construction steel, MC grades for controlled carbon applications, and LC grades for specialty steels. Its ability to remove oxygen and sulfur from molten steel ensures high-quality structural and alloy steels, making it indispensable in steel production worldwide.</p>
            </div>
        </div>

        <!-- Ferro Manganese -->
        <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-5 order-md-2">
                <img class="img-fluid rounded" src="{{ asset('img/ferro-manganese.jpeg')}}" alt="Ferro Manganese">
            </div>
            <div class="col-md-7 order-md-1">
                <h3>Ferro Manganese (HC/MC/LC)</h3>
                <p>Ferro Manganese is an iron-manganese alloy vital for deoxidizing and desulfurizing steel. It boosts tensile strength, toughness, and wear resistance. The alloy comes in High Carbon (HC) for carbon steel production, Medium Carbon (MC) for controlled carbon alloy steel, and Low Carbon (LC) for stainless steel manufacturing. By binding impurities and refining steel composition, Ferro Manganese plays a key role in producing durable, high-performance steel. It is indispensable in construction, automotive, and infrastructure sectors for creating strong and long-lasting steel products.</p>
            </div>
        </div>

        <!-- Ferro Chrome -->
        <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-md-5">
                <img class="img-fluid rounded" src="{{ asset('img/ferro-chrome.jpeg')}}" alt="Ferro Chrome">
            </div>
            <div class="col-md-7">
                <h3>Ferro Chrome (HC/LC)</h3>
                <p>Ferro Chrome is an alloy of chromium and iron, mainly used in stainless steel production. It imparts corrosion resistance, hardness, and high-temperature strength. High Carbon (HC) Ferro Chrome is common in general stainless steel, while Low Carbon (LC) is preferred for low-carbon stainless steels and specialty alloys to prevent carbide formation. Containing 50–70% chromium, it forms a protective oxide layer on steel surfaces, making the material rust and oxidation-resistant. It is also used in tool steels, wear-resistant materials, and superalloys.</p>
            </div>
        </div>

        <!-- Ferro Silicon -->
        <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-5 order-md-2">
                <img class="img-fluid rounded" src="{{ asset('img/ferro-silicon.jpeg')}}" alt="Ferro Silicon">
            </div>
            <div class="col-md-7 order-md-1">
                <h3>Ferro Silicon</h3>
                <p>Ferro Silicon is an alloy of iron and silicon used as a deoxidizer, inoculant, and alloying element in steel and cast iron production. It removes oxygen from molten steel, improves fluidity, and enhances strength and magnetic properties. Containing 15–90% silicon, it is also used in manufacturing silicon steel for electrical applications. In cast iron, it promotes graphitization, producing a uniform microstructure for better machinability. Ferro Silicon is essential in corrosion-resistant, high-strength steel production and serves as a base material for other ferroalloys and magnesium production.</p>
            </div>
        </div>

    </div>
</div>

<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
            <h1 class="display-5 mb-5">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-3.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection