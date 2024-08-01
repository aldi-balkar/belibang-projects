<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body class="text-white bg-belibang-black font-poppins">
    <nav class="w-full fixed top-0 bg-[#00000010] backdrop-blur-lg z-10">
        <div class="container max-w-[1130px] mx-auto flex items-center justify-between h-[74px]">
            <div class="flex items-center gap-[26px]">
                <a href="index.html" class="flex w-[154px] shrink-0 items-center">
                    <img src="{{asset('images/logos/logo.svg')}}" alt="logo">
                </a>
                <ul class="flex items-center gap-6">
                    <li class="transition-all duration-300 text-belibang-grey hover:text-belibang-light-grey">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="relative transition-all duration-300 text-belibang-grey hover:text-belibang-light-grey">
                        <button id="menu-button" class="flex items-center gap-1 focus:text-belibang-light-grey">
                            <span>Categories</span>
                            <img src="{{asset('images/icons/arrow-down.svg')}}" alt="icon">
                        </button>
                        <div
                            class="dropdown-menu hidden absolute top-[52px] grid grid-cols-2 p-4 gap-[10px] w-[526px] rounded-[20px] bg-[#1E1E1E] border border-[#414141] z-10">
                            <div
                                class="col-span-2 flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{asset('images/icons/cart.svg')}}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="text-sm font-bold text-white">All Products</p>
                                        <p class="text-xs text-belibang-grey">Everything in One Place</p>
                                    </a>
                                </div>
                                <div class="flex w-6 h-6 shrink-0">
                                    <img src="{{asset('images/icons/crown.svg')}}" alt="icon">
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{asset('images/icons/laptop.svg')}}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="text-sm font-bold text-white">Templates</p>
                                        <p class="text-xs text-belibang-grey">Designs Made Easy</p>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{asset('images/icons/hat.svg')}}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="text-sm font-bold text-white">Courses</p>
                                        <p class="text-xs text-belibang-grey">Expand Your Skills</p>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{asset('images/icons/book.svg')}}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="text-sm font-bold text-white">Ebooks</p>
                                        <p class="text-xs text-belibang-grey">Read and Learn</p>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{asset('images/icons/pen.svg')}}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="text-sm font-bold text-white">Fonts</p>
                                        <p class="text-xs text-belibang-grey">Typography Selection</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="transition-all duration-300 text-belibang-grey hover:text-belibang-light-grey">
                        <a href="">Stories</a>
                    </li>
                    <li class="transition-all duration-300 text-belibang-grey hover:text-belibang-light-grey">
                        <a href="">Benefits</a>
                    </li>
                    <li class="transition-all duration-300 text-belibang-grey hover:text-belibang-light-grey">
                        <a href="">About</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <a href="" class="transition-all duration-300 text-belibang-grey hover:text-belibang-light-grey">Log
                    in</a>
                <a href=""
                    class="p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Sign
                    up</a>
            </div>
        </div>
    </nav>

    <header
        class="w-full pt-[74px] pb-[34px] bg-[url('{{asset('images/backgrounds/hero-image.png')}}')] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="container max-w-[1130px] mx-auto flex flex-col items-center justify-center gap-[34px] z-10">
            <div class="z-10 flex flex-col gap-2 mt-20 text-center w-fit">
                <h1 class="font-semibold text-[60px] leading-[130%]">Explore High Quality<br>Digital Products</h1>
                <p class="text-lg text-belibang-grey">Change the way you work to achieve better results.</p>
            </div>
            <div class="flex w-full justify-center mb-[34px] z-10">
                <form
                    class="group/search-bar p-[14px_18px] bg-belibang-darker-grey ring-1 ring-[#414141] hover:ring-[#888888] max-w-[560px] w-full rounded-full transition-all duration-300">
                    <div class="relative text-left">
                        <button class="absolute inset-y-0 left-0 flex items-center">
                            <img src="{{asset('images/icons/search-normal.svg')}}" alt="icon">
                        </button>
                        <input type="text" id="searchInput"
                            class="bg-belibang-darker-grey w-full pl-[36px] focus:outline-none placeholder:text-[#595959] pr-9"
                            placeholder="Type anything to search..." />
                        <input type="reset" id="resetButton"
                            class="close-button hidden w-[38px] h-[38px] flex shrink-0 bg-[url('{{asset('images/icons/close.svg')}}')] hover:bg-[url('{{asset('images/icons/close-white.svg')}}')] transition-all duration-300 appearance-none transform -translate-x-1/2 -translate-y-1/2 absolute top-1/2 -right-5"
                            value="">
                    </div>
                </form>
            </div>
        </div>
        <div class="absolute top-0 z-0 w-full h-full bg-gradient-to-b from-belibang-black/70 to-belibang-black"></div>
    </header>

    <section id="Category" class="container max-w-[1130px] mx-auto mb-[102px] flex flex-col gap-8">
        <h2 class="font-semibold text-[32px]">Category</h2>
        <div class="flex items-center justify-between">
            <a href="category.html"
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{asset('images/icons/cart.svg')}}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="text-sm font-bold">All Products</p>
                        <p class="text-xs text-belibang-grey">Everything in One Place</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{asset('images/icons/laptop.svg')}}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="text-sm font-bold">Templates</p>
                        <p class="text-xs text-belibang-grey">Designs Made Easy</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{asset('images/icons/book.svg')}}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="text-sm font-bold">Ebooks</p>
                        <p class="text-xs text-belibang-grey">Read and Learn</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{asset('images/icons/hat.svg')}}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="text-sm font-bold">Courses</p>
                        <p class="text-xs text-belibang-grey">Expand Your Skills</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{asset('images/icons/pen.svg')}}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="text-sm font-bold">Fonts</p>
                        <p class="text-xs text-belibang-grey">Typography Selection</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section id="NewProduct" class="container max-w-[1130px] mx-auto mb-[102px] flex flex-col gap-8">
        <h2 class="font-semibold text-[32px]">New Product</h2>
        <div class="grid grid-cols-4 gap-[22px]">
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="details.html" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="{{asset('images/thumbnails/img1.png')}}" class="object-cover w-full h-full" alt="thumbnail">
                    <p class="backdrop-blur bg-black/30 rounded-[4px] p-[4px_8px] absolute top-3 right-[14px] z-10">Rp
                        129,000</p>
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="details.html" class="font-semibold line-clamp-2 hover:line-clamp-none">SaaS Website
                            Master Template: Streamline Your Digital Solution</a>
                        <p
                            class="bg-[#2A2A2A] font-semibold text-xs text-belibang-grey rounded-[4px] p-[4px_6px] w-fit">
                            Template</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <div class="flex items-center justify-center w-6 h-6 overflow-hidden rounded-full shrink-0">
                            <img src="{{asset('images/logos/framer.png')}}" class="object-cover w-full h-full" alt="logo">
                        </div>
                        <a href="" class="text-xs font-semibold text-belibang-grey">Framer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Testimonial" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1130px] mx-auto flex justify-between items-center">
            <h2 class="font-semibold text-[32px]">Customers Are Happy <br>With Our Products</h2>
            <div class="flex gap-[14px] items-center">
                <button class="w-10 h-10 overflow-hidden rotate-180 rounded-full btn-prev shrink-0">
                    <img src="{{asset('images/icons/circle-arrow-r.svg')}}" alt="icon">
                </button>
                <button class="w-10 h-10 overflow-hidden rounded-full btn-next shrink-0">
                    <img src="{{asset('images/icons/circle-arrow-r.svg')}}" alt="icon">
                </button>
            </div>
        </div>
        <div class="w-full overflow-x-hidden no-scrollbar">
            <div class="testi-carousel" data-flickity>
                <div class="flex w-[calc((100vw-1130px-20px)/2)] shrink-0"></div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{asset('images/backgrounds/Testimonials-image.png')}}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="flex w-12 h-12 overflow-hidden rounded-full shrink-0">
                                <img src="{{asset('images/photos/photo1.png')}}" class="object-cover w-full h-full"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez</p>
                                <p class="text-xs font-semibold text-left text-belibang-grey">Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{asset('images/backgrounds/Testimonials-image.png')}}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="flex w-12 h-12 overflow-hidden rounded-full shrink-0">
                                <img src="{{asset('images/photos/photo1.png')}}" class="object-cover w-full h-full"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez</p>
                                <p class="text-xs font-semibold text-left text-belibang-grey">Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{asset('images/backgrounds/Testimonials-image.png')}}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="flex w-12 h-12 overflow-hidden rounded-full shrink-0">
                                <img src="{{asset('images/photos/photo2.png')}}" class="object-cover w-full h-full"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Michael Chen</p>
                                <p class="text-xs font-semibold text-left text-belibang-grey">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{asset('images/backgrounds/Testimonials-image.png')}}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="flex w-12 h-12 overflow-hidden rounded-full shrink-0">
                                <img src="{{asset('images/photos/photo1.png')}}" class="object-cover w-full h-full"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Emily Robinson</p>
                                <p class="text-xs font-semibold text-left text-belibang-grey">Senior Graphic Designer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{asset('images/backgrounds/Testimonials-image.png')}}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                                <img src="{{asset('images/icons/star.svg')}}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="flex w-12 h-12 overflow-hidden rounded-full shrink-0">
                                <img src="{{asset('images/photos/photo1.png')}}" class="object-cover w-full h-full"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez</p>
                                <p class="text-xs font-semibold text-left text-belibang-grey">Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Tool" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1130px] mx-auto flex justify-between items-center">
            <h2 class="font-semibold text-[32px]">Browse Tools</h2>
        </div>
        <div class="flex flex-col w-full gap-5 overflow-hidden tools-logos">
            <div class="flex items-center group/slider flex-nowrap w-max">
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/blender.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Excel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Kotlin.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Laravel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Vue.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/figma-logo.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/flutter.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/golang.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap ">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/blender.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Excel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Kotlin.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Laravel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Vue.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/figma-logo.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/flutter.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/golang.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex items-center group/slider flex-nowrap w-max">
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/blender.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Excel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Kotlin.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Laravel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Vue.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/figma-logo.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/flutter.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/golang.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap ">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/blender.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Excel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Kotlin.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Laravel.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/Vue.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/figma-logo.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/flutter.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="flex w-16 h-16 overflow-hidden shrink-0">
                                <img src="{{asset('images/logos/golang.svg')}}" class="object-contain w-full h-full"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="text-lg font-bold">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#181818] py-[34px]">
        <div class="container max-w-[1130px] mx-auto flex flex-col gap-[66px]">
            <div class="flex justify-between">
                <div class="flex flex-col justify-between">
                    <div class="flex shrink-0">
                        <img src="{{asset('images/logos/logo.svg')}}" alt="logo">
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="text-sm font-semibold">Connect with us</p>
                        <div class="flex items-center gap-5">
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{asset('images/logos/dribbble.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{asset('images/logos/facebook.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{asset('images/logos/apple.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{asset('images/logos/figma.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex gap-[72px]">
                    <div class="flex flex-col gap-8">
                        <p class="text-sm font-semibold">Browse</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-xs font-semibold text-belibang-grey">All Products</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Templates</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Ebooks</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Courses</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Fonts</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="text-sm font-semibold">Platform</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-xs font-semibold text-belibang-grey">All-Access Pass</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Become an author</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Affiliate program</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Terms & Licensing</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="text-sm font-semibold">Customer service</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-xs font-semibold text-belibang-grey">FAQ</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Orders</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Payments</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">refunds</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="text-sm font-semibold">Contact us</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-xs font-semibold text-belibang-grey">About us</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Company</a>
                            <a href="" class="text-xs font-semibold text-belibang-grey">Careers</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-[10px] text-[#595959]">© 2024, Belibang LLC.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        $('.testi-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            prevNextButtons: false,
        });

        // previous
        $('.btn-prev').on('click', function () {
            $('.testi-carousel').flickity('previous', true);
        });

        // next
        $('.btn-next').on('click', function () {
            $('.testi-carousel').flickity('next', true);
        });
    </script>

    <script>
        const searchInput = document.getElementById('searchInput');
        const resetButton = document.getElementById('resetButton');

        searchInput.addEventListener('input', function () {
            if (this.value.trim() !== '') {
                resetButton.classList.remove('hidden');
            } else {
                resetButton.classList.add('hidden');
            }
        });

        resetButton.addEventListener('click', function () {
            resetButton.classList.add('hidden');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.getElementById('menu-button');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            menuButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close the dropdown menu when clicking outside of it
            document.addEventListener('click', function (event) {
                const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event.target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>